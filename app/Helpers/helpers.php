<?php
function is_ban($user){
    return $user->is_ban;
}
function getUserStat($stat){

    $status = [1=>'User',2=>'Company Admin',3=>'Super Admin'];
    return $status[$stat];
}
function is_superAdmin($user){
    $id = $user->id;
    $superAdmin = \App\Administrators::where('user_id',$id)->count();
    return $superAdmin;
}

function returnData($data,$request,$status=200){
    if ($request->ajax() || $request->wantsJson()) {
        return response()->json($data,$status);
    }

    return $data;
}
function listFolderFiles($dir,$all=false){
    $ffs = scandir($dir);
    $files = [];
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){

            if($all){
                if(is_dir($dir.'/'.$ff)) $files[] = listSubFolderFiles($dir.'/'.$ff);
            } else {
                if(is_dir($dir.'/'.$ff)) $files[]= $dir.'/'.$ff;
            }


        }
    }

    return $files;
}
function listSubFolderFiles($dir){
    $ffs = scandir($dir);
    $files = [];
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){

            if(is_dir($dir.'/'.$ff)) $files[]= $dir.'/'.$ff;

        }
    }

    return $files;
}
function permissionCheck($url){

  $permissions =   getGroupScopesWithPermissionUrl(Auth::user());

    return in_array($url,$permissions);
}
function getGroupScopesWithPermissionUrl($user){
    $data = null;
    $scopes = [];

    if($user['stat'] == 3){ //admin
        $scopes = \App\Permission::select('permission_url')->get()->toArray();
    }elseif($user['stat'] == 2){
        $company = \App\Company::where('companies.user_id',$user['id'])
            ->leftJoin('package_relations as pr','pr.company_id','=','companies.id')
            ->first();
        if($company){
            $scopes = \App\PackagePermissionRelation::join('user_permissions as up','up.id','=','package_permission_relations.permission_id')->select('up.permission_url')->where('package_permission_relations.package_id',$company->package_id)->get()->toArray();
        }
    } else {

        $scopes = \App\UserGroupRelation::where('user_id',$user['id'])
            ->join('user_group_scopes as ugs', 'ugs.group_id', '=', 'user_group_relations.group_id')
            ->join('user_permissions as up', 'ugs.permission_id', '=', 'up.id')
            ->select('up.permission_url')
            ->get()->toArray();
}


    if(count($scopes)>0){
        foreach($scopes as $scope){
            $data[]=$scope['permission_url'];
        }

       $data = array_unique($data);

    } else {
        $data[]=null;
    }



        return $data;
    }

function getGroupScopesWithPermissionID($user){

    $data = null;
    $scopes = [];

if($user['stat'] == 3){ //admin
    $scopes = \App\Permission::select('id')->get()->toArray();
}elseif($user['stat'] == 2){
    $company = \App\Company::where('companies.user_id',$user['id'])
        ->leftJoin('package_relations as pr','pr.company_id','=','companies.id')
        ->first();
    if($company){
        $scopes = \App\PackagePermissionRelation::select('permission_id as id')->where('package_id',$company->package_id)->get()->toArray();
    }

} else {

        $scopes = \App\UserGroupRelation::where('user_id',$user['id'])
            ->join('user_group_scopes as ugs', 'ugs.group_id', '=', 'user_group_relations.group_id')
            ->join('user_permissions as up', 'ugs.permission_id', '=', 'up.id')
            ->select('up.id')
            ->get()->toArray();
}



    if(count($scopes)>0){
        foreach($scopes as $scope){
            $data[]=$scope['id'];
        }

       $data = array_unique($data);

    }



        return $data;
}
function getUrl($args){

    foreach($args as $k=>$v){
        if($k == 2){
            $url[] = camel_case($v); // function dizini camel_case olmali
        } else {
            $url[] = studly_case($v);
        }
    }
    return $url;
}
function getNameSpace($args){
    $namespace = implode("\\",$this->args);
}
function menuAccess($stat){
    $arr = config('module.Menus')[$stat];
    $permissions = getGroupScopesWithPermissionID(\Auth::user());

    if(!isset($permissions)){
        return [];
    }
    foreach(array_keys($arr) as $key){


        if(isset($arr[$key]['general']['permission_id'])){
            $permission_id = $arr[$key]['general']['permission_id'];
            if(!in_array($permission_id,$permissions)){
                if($permission_id != 0){
                    if(count($arr[$key]) > 0)
                        array_forget($arr,$key);
                }
            }
        }


        if(isset($arr[$key]['sub_menu'])){
            $arr_keys  = array_keys($arr[$key]['sub_menu']);

            foreach($arr_keys as $keys){

                $permission_ids = $arr[$key]['sub_menu'][$keys]['permission_id'];
                if(!in_array($permission_ids,$permissions)){
                    unset($arr[$key]['sub_menu'][$keys]);
                }

            }
        }





    }


    return $arr;

}

function checkModuleScopes($modules, $controller, $function,$request){

    $token = getToken($request);
    //$permissions = $token['permissions'];


    $permissions = getGroupScopesWithPermissionUrl($token);


    $url[] = studly_case($modules);
    $url[] = studly_case($controller);
    $url[] = camel_case($function);


    $url = implode('/',$url);
    //dd($url);
    return in_array($url,$permissions);

}

function callModules($modules,$controller,$function,$parameters){


    $namespace = "\\App\\Modules\\".studly_case($modules)."\\Controllers\\".studly_case($controller)."Controller";

    if(!class_exists($namespace)){
        return response()->json(['error'=>'Namespace Not Exists','name'=>$namespace],200);
    }

    $name = new $namespace();

    try {
        if (method_exists($name, $function)) {
            return call_user_func_array(array($name, $function), $parameters);
        }
    }catch(Exception $e){
        return response()->json(['error'=>$e->getMessage()],200);
    }

    return response()->json(['error'=>'Method Not Exists'],200);

}

function getToken($request)
{
    return $request->user()->toArray();
}

