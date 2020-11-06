<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./css/style.css' rel='stylesheet'>
    <title>LAND fast | Products</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .title{
            position:absolute;
            top:25px;
            left:25px;
            color:white;
            font-family:cursive;
            letter-spacing:2px;
        }
        .layer{
            position:absolute;
            top:10px;
            left:0px;
            width:350px;
            height:65px;
            background:orange;
        }
        #form{
            position:absolute;
            top:55%;
            left:25%;
            transform:translate(-50%,-50%);
            display:flex;
            flex-direction:column;
            box-shadow:0 0 5px black;
            padding:20px;
        }
        #form > input{
            border:1px solid;
        }
        .preview{
            position:absolute;
            left:50%;
            width:50%;
            height:100%;
            box-shadow: 0 0 5px black;
        }
        .function{
            position:absolute;
            width:250px;
            height:40px;
            background:orange;
            font-size:30px;
            color:white;
            font-family:cursive;
            padding-left:20px;
            letter-spacing:2px;
            padding-top:5px;
        }
        .left{
            top:100px;
            left:0px;
        }
        .right{
            top:390px;
            right:0;
        }

        .flex_box{
            display:flex;
        }
        .flex_box>div{
            background-color:#333;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:50px;
            font-size:30px;
            text-align:center;
            color:white;
            position:relative;
            height:300px;
            width:50%;
            overflow:auto;
        }
        .flex_text>button{
            margin-top:25px;
            width:200px;
            outline:none;
            letter-spacing:1px;
            font-size:20px;
        }
        .flex_img>img{
            position:absolute;
            top:0;
            left:0;
            width:100%;
          height:100%;
        }
        #desc{
            font-size:20px;
        }
        textarea{
            height:60px;
        }
    </style>

    </style>
</head>
<body>
    <div class="layer"></div>
    <h1 class='title'>Employee Home</h1>
    <div class='function left'>Add Product</div>
    <form id="form" action="./server_scripts/product_handler.php" method="POST" enctype="multipart/form-data">
        <h4>Song Name</h4>
        <input type='text' name='name' id='title' onkeyup='preview()'>
        <h4>Song File</h4>
        <input name='filelink' type='file'>
        <h4>Song Thumbnail</h4>
        <input name='imglink' type='file'>
        <h4>Song Desciption</h4>
        <textarea name='description' onkeyup='preview()' id='description'></textarea><br>
        <button> S U B M I T </button>
    </form>
    <div class="preview">
        <div class='flex_box'>
            <div class='flex_img'>
                <img src='./img/music_thumb.jpg'>
            </div>
            <div class='flex_text'>
                <h4 id='heading'></h4>
                <p id='desc'></p>
                <button>Download</button>
            </div>
        </div>
        <div class='function right'>Preview</div>
    </div>
    <script>
        const heading = document.getElementById('heading');
        const desc = document.getElementById('desc');
        const preview = () => {
            const title = document.getElementById('title').value;
            const description = document.getElementById('description').value;
            heading.innerHTML = title;
            desc.innerHTML = description;
        };
    </script>
</body>
</html>