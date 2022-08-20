<!doctype html>
<html lang="en">

<head>
    <style type="text/css">
    label {
        display: inline-block;
        width: 200px;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      color: white;
    }

    * {
      box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #000000;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #4d7dd0;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #afafaf;
    }

    /* Style the container/contact section */
    .container {
      border-radius: 5px;
      background-image: url('forrest.jpg');
      background-size: cover;
      background-position: center;
      padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
      border: 1px grey;
      width: 50%;
      margin-top: 6px;
      padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .column,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  
    </style>
</head>

<body>

    <div class="container my-5 mx-5 px-5">
        <h2 class="title is-2 is-capitalized">Book Your Consultancy</h2>
        <form action="{{url('appoinment')}}" method="post">
            @csrf
            <div class="field">
                <label for="name" style="color:black;" class="label is-size-4 has-text-weight-light">
                    Name:
                </label>
                <input type="text" style="color:black;"  name="name" id="name" class="input" autofocus>
            </div>
            <div class="field">
                <label for="email" style="color:black;" class="label is-size-4 has-text-weight-light">
                    Email:
                </label>
                <input type="text" style="color:black;" name="email" id="email" class="input">
            </div>
            <div class="field">
                <label for="email" style="color:black;" class="label is-size-4 has-text-weight-light">
                    Subject:
                </label>
                <input type="text" style="color:black;" name="sub" class="input">
            </div>
            <div class="field">
                <label for="message" style="color:black;" class="label is-size-4 has-text-weight-light">
                    Message:
                </label>
                <textarea name="msg" style="color:black;" id="message" rows="5" class="textarea is-large"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>


</body>

</html>