<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <div>
        <!-- "js-fileapi-wrapper" -- required class -->
        <div class="js-fileapi-wrapper upload-btn">
            <div class="upload-btn__txt">Choose files</div>
            <input id="choose" name="files" type="file" multiple />
        </div>
        <div id="images"><!-- previews --></div>
    </div>

    <script>window.FileAPI = { staticPath: '/js/dist/' };</script>
    <script src="/js/dist/FileAPI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js" type="text/javascript"></script>
    <script>

        var choose = document.getElementById('choose');
        var button = document.getElementsByClassName('button')

        function getOptions(){

            $('#images button').on('click',function(event){

                var id = $(this).data('id');

                var files = FileAPI.getFiles($("#zone_"+id).find('img'))
                FileAPI.each(files, function (file){
                    FileAPI.Image(file).rotate(80).get(function (err, img){
                        console.log(img);
                        $("#zone_"+id).empty();
                        $("#zone_"+id).html(img)
                    })
                })


            });
        }


        // Resolve after a random interval
        FileAPI.event.on(choose, 'change', function (evt){
            var files = FileAPI.getFiles(evt); // Retrieve file list

            FileAPI.filterFiles(files, function (file, info/**Object*/){
                if( /^image/.test(file.type) ){
                    return  info.width >= 320 && info.height >= 240; // file type test ediyor bu araliklarda calismaz
                }
                return  false;
            }, function (files/**Array*/, rejected/**Array*/){

                if( files.length ){
                    // Make preview 100x100

                    FileAPI.each(files, function (file,index){

                        FileAPI.Image(file).preview(250).get(function (err, img){

                            var html = '<button data-id="'+index+'">Rotate</button><div class="zone_'+index+'">'+img.outerHTML+'</div>';
                            $( "div#images" ).append(html)

                        });

                        //console.log(result);

                    });








                    // Uploading Files
                    FileAPI.upload({
                        url: './uploadZone',
                        files: { images: files },
                        type:"POST",
                        dataType:"json",
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                        progress: function (evt){  },
                        complete: function (err, xhr){
                            getOptions();

                        }
                    });


                }

            });


        });


    </script>
    </body>
</html>
