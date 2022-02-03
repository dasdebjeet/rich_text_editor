<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rich text editor</title>


        <!-- Meta tags -->
        <meta name="Description" CONTENT="Rich text editor using HTML, CSS and JS">

        <!-- CSS -->
        <link href="./css/richText_editor.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel=" stylesheet">

        <!--FontAwesome-->
        <script src="https://kit.fontawesome.com/76c40a5f57.js" crossorigin="anonymous"></script>
        <link href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" rel=" stylesheet">


        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./js/richText_editor.js"></script>

    </head>

    <body>
        <div class="editor_dataModal flex_c">
            <div class="imgUrl_dataModal_content">
                <div style="margin-bottom:40px;">Insert image</div>
                <input class="img_url_inp" type="url">
                <p>Only select images that you have confirmed that you have the license to use.</p>
                <div class="insert_btns flex_c">
                    <button class="img_cancleBtn" style="margin-right:20px">Cancel</button>
                    <button class="img_insertBtn">Insert</button>
                </div>
            </div>
            <div class="createUrl_dataModal_content">
                <div style="margin-bottom:40px;">Insert url</div>
                <input class="createUrl_inp" type="url">
                <p>Please put a valid url</p>
                <div class="createUrl_btns flex_c">
                    <button class="createUrl_cancleBtn" style="margin-right:20px">Cancel</button>
                    <button class="createUrl_insertBtn">Create</button>
                </div>
            </div>
        </div>

        <h1>Rich Text Editor</h1>

        <div class="blog_textEditorWrapper">
            <div class="blog_textEditor_toolbar">
                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="bold" tooltip="Bold"><i class="fal fa-bold"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="italic" tooltip="Italic"><i class="fal fa-italic"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="underline" tooltip="Underline"><i class="fal fa-underline"></i></button>
                </div>

                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="strikeThrough" tooltip="Strike Through"><i class="fal fa-strikethrough"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="insertParagraph" tooltip="Paragraph"><i class="fal fa-paragraph"></i></button>
                </div>

                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="H1" tooltip="Heading 1" style="font-size:18px"><i class="fal fa-h1"></i></button>
                    <div class="toolbar_btn_wrapSpace"></div>
                    <button class="toolbar_btn flex_c" data-cmd="H2" tooltip="Heading 2" style="font-size:18px"><i class="fal fa-h2"></i></button>
                    <div class="toolbar_btn_wrapSpace"></div>
                    <button class="toolbar_btn flex_c" data-cmd="H3" tooltip="Heading 3" style="font-size:18px"><i class="fal fa-h3"></i></button>
                    <div class="toolbar_btn_wrapSpace"></div>
                </div>


                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="justifyLeft" tooltip="Align Left"><i class="fal fa-align-left"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="justifyCenter" tooltip="Align Center"><i class="fal fa-align-center"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="justifyFull" tooltip="Justify"><i class="fal fa-align-justify"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="justifyRight" tooltip="Align Right"><i class="fal fa-align-right"></i></button>
                </div>


                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="insertUnorderedList" tooltip="Unordered List"><i class="fal fa-list"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="insertOrderedList" tooltip="Ordered List"><i class="fal fa-list-ol"></i></button>
                </div>

                <!-- <div style="flex-basis: 100%;height: 0; margin: 0 !important;"></div> -->

                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="insertImage" tooltip="Insert Image" status="off"><i class="fal fa-image"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="createLink" tooltip="Create Link"><i class="fal fa-link"></i></button>


                    <div class="insertImg_btn_dropdown">
                        <div class="img_dropdown_menu imgFile flex_c" style="border-bottom: 2px solid #b378ff;">
                            <div class="menu_text">Upload from PC</div>
                            <div class="menu_icon"><i class="fal fa-arrow-to-top"></i></div>
                        </div>
                        <div class="img_dropdown_menu imgUrl flex_c">
                            <div class="menu_text">Insert by url</div>
                            <div class="menu_icon"><i class="fal fa-link"></i></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="toolbar_break"></div> -->

                <div class="toolbar_btn flex_c" data-cmd="veiwCode" status="off" tooltip="HTML Code"><i class="fal fa-code"></i></div>

                <div class="toolbar_btn_wrap flex_c">
                    <button class="toolbar_btn flex_c" data-cmd="undo" tooltip="Undo"><i class="fal fa-undo"></i></button>
                    <button class="toolbar_btn flex_c" data-cmd="redo" tooltip="Redo"><i class="fal fa-redo"></i></button>
                </div>

            </div>

            <div class="editor_container flex_c">
                <div class="lineNumber"></div>
                <div class="editor_body" id="blog_editor" contenteditable="true"></div>
            </div>

        </div>

        <h3>Made by <em><a href="https://github.com/Debjeet-GitHUb" style="font-family: 'Sacramento', cursive;">Debjeet Das</a></em> 💖</h3>
    </body>

</html>
