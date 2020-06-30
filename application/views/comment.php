<!DOCTYPE html>
<html>
<head>
    <title>Comment</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");
        * {
          margin: 0;
          padding: 0;
        }

        body {
          width: 100vw;
          height: 100vh;
          display: grid;
          align-items: center;
          justify-items: center;
        }

        .contact-us {
          background: #f8f4e5;
          padding: 50px 100px;
          border: 2px solid black;
          box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
        }

        input {
          display: block;
          width: 100%;
          font-size: 14pt;
          line-height: 28pt;
          font-family: "Fjalla One";
          margin-bottom: 28pt;
          border: none;
          border-bottom: 5px solid black;
          background: #f8f4e5;
          min-width: 250px;
          padding-left: 5px;
          outline: none;
          color: black;
        }

        input:focus {
          border-bottom: 5px solid #ffa580;
        }

        button {
          display: block;
          margin: 0 auto;
          line-height: 28pt;
          padding: 0 20px;
          background: #ffa580;
          letter-spacing: 2px;
          transition: 0.2s all ease-in-out;
          outline: none;
          border: 1px solid black;
          box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px black;
        }
        button:hover {
          background: black;
          color: white;
          border: 1px solid black;
        }

        ::selection {
          background: #ffc8ff;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
          border-bottom: 5px solid #95a4ff;
          -webkit-text-fill-color: #2A293E;
          -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
          transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>
<body>
    <form id="comment_form" action="<?= base_url() ?>nyoba/add_comment/<?= $lol['id_blog'] ?>" method='post'>
        <div class="form-group">
            <label for="comment_name">Name:</label>
            <input class="form-control" type="text" required name="comment_name" id='Name' value="<?= set_value("comment_name") ?>"/>
        </div>

        <div class="form-group">
            <label for="email">E-mail :</label>
            <input class="form-control" type="text" name="comment_email" value="<?= set_value("comment_email") ?>" id='Email'/>
        </div>
        <div class="form-group">
            <label for="comment">Comment :</label>
            <input class="form-control" type="text" name="comment_body" value="<?= set_value("comment_body") ?>" id='comment_body'/>
        </div>

        <input type='hidden' name='parent_id' value="0" id='parent_id' />
        <input type='hidden' name='id_blog' value="<?= set_value("id_blog", $lol['id_blog']) ?>" id='id_blog'/>

        <div id='submit_button'>
            <input class="btn btn-success" type="submit" name="submit" value="add comment"/>
        </div>
    </form>
</body>
</html>