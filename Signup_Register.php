<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> 
               
            .leftcolumn
            {
                position:absolute;
                width: 65%;
                float: left;
                height: 150%;
                z-index:-1;
            }

            .leftcolumn .icon
            {
                position:absolute;
                top: 1vw;
                left: 1vw;
                width: 17vw;
                height: 7vw;
                z-index: 1;
            }
            
            .leftcolumn .tag
            {
                position: absolute;
                color: black;
                width: 60%;
                left: 20%;
                bottom: 1%;
                font-family: "Agency FB";
                font-size:3vw ;
                text-align: center;
            }

                
            .rightcolumn
            {
                position: absolute;
                width: 35%;
                height: 150%;
                right:0%;
                background-color:rgb(111, 112, 112);
            }
            
            .home
            {
                position: relative;
                font-family: "Agency FB";
                font-size: 1.9vw;
                left: 1vw;
                top: 1vw;
                cursor: pointer;
            }

            .home:hover
            {
                color: white;
            }
            
            h1
            {
                position: relative;
                font-family: "Agency FB";
                left: 1vw;
                margin-bottom:4vw;
                font-size: 4vw;

            }

            
            label
            {
                position: relative;
                left: 1vw;
                width:100%;
                height: 3vw;
                font-size: 2vw;
                color: black;
                font-family: "Agency FB";
                bottom: 0.1vw;
                margin-right: 50%;
                
            }

            input[type=text]
            {
                position: relative;
                left: 5.5vw;
                width:70%;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                border:1px solid black;
                margin-top: 1vw;
                margin-bottom: 1vw;
                font-family: "Agency FB";

            }
            
            
            input[type=password]
            {
                position: relative;
                left: 5.5vw;
                width:70%;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                margin-top: 1vw;
                margin-bottom: 1.5vw;
                border:1px solid black;
                font-family: "Agency FB";
            }

            input[type=checkbox]
            {
                position: relative;
                width:10%;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                margin-top: 1vw;
                border:1px solid black;  
            }

            .text1
            {
                position: relative;
                font-family: "Agency FB";
                left: 4vw;
                font-size: 2vw;
                top: -2.5vw;
            }


            a
            {
                top: -1vw;
                position: relative;
                font-family: "Agency FB";
                font-size: 2vw;
                left: 1vw;
                color: black;
                text-decoration: none;
            }

            a:hover
            {
                color: white;
            }

            button
            {
                position: relative;
                left: 1vw;
                width:90%;
                height: 4vw;
                padding: 0.5vw;
                font-size: 2vw;
                font-family: "Agency FB";
                color: black;
                margin-top: 2vw;
                margin-bottom: 1vw;
                border:1px solid black;
                cursor: pointer;
                border-radius: 25px;
            }

            
            button:hover
            {
                background-color: rgb(33, 165, 209);
                color: white;
            }

            .text
            {
                position: absolute;
                left: 1.2vw;
                top: 14.7vw;
                background-color: aliceblue;
                width: 12%;
                height: 4.1vw;
                border:1px solid black;
            }


            .password
            {
                position: absolute;
                left: 1.2vw;
                top: 20.9vw;
                background-color: aliceblue;
                width: 12%;
                height: 4.1vw;
                border:1px solid black;
            }
            

            .confirm_password
            {
                position: absolute;
                left: 1.2vw;
                top: 27.5vw;
                background-color: aliceblue;
                width: 12%;
                height: 4vw;
                border:1px solid black;
            }


            @media only screen and (max-width:600px) {

            .leftcolumn {
                top: 0%;
                left: 0%;
                position: absolute;
                width: 100%;
                height: 50%;
            }

            .rightcolumn {
                position: absolute;
                top: 50%;
                width: 100%;
                height: 60%;
            }

            .leftcolumn .icon
            {
                position:absolute;
                top: 3vw;
                left: 3vw;
                width: 33vw;
                height: 15vw;
                z-index: 1;
            }
            
            .leftcolumn .tag
            {
                position: absolute;
                color: black;
                width: 60%;
                left: 20%;
                bottom: 3%;
                font-family: "Agency FB";
                font-size:5vw ;
                text-align: center;
            }

            .home
            {
                position: relative;
                font-family: "Agency FB";
                font-size: 3.3vw;
                left: 3vw;
                top: 3vw;
                cursor: pointer;
                
            }

            h1
            {
                position: relative;
                font-family: "Agency FB";
                left: 3vw;
                margin-top: 5vw;
                margin-bottom:4vw;
                font-size: 7vw;

            }

            
            label
            {
                position: relative;
                left: 3vw;
                width:100%;
                height: 3vw;
                font-size: 5vw;
                color: black;
                font-family: "Agency FB";
                bottom: 0.1vw;
                margin-right: 50%;
                
            }

            input[type=text]
            {
                position: relative;
                left: 13vw;
                width:77%;
                height: 5vw;
                padding: 1vw;
                font-size: 5vw;
                color: black;
                border:1px solid black;
                margin-top: 3vw;
                margin-bottom: 3vw;
                font-family: "Agency FB";

            }
            
            
            input[type=password]
            {
                position: relative;
                left: 13vw;
                width:77%;
                height: 5vw;
                padding: 1vw;
                font-size: 5vw;
                color: black;
                margin-top: 3vw;
                margin-bottom: 3.5vw;
                border:1px solid black;
                font-family: "Agency FB";
            }

            input[type=checkbox]
            {
                position: relative;
                left: -5vw;
                width:20%;
                height: 5vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                margin-top: 1vw;
                border:1px solid black;  
            }

            .text1
            {
                position: relative;
                font-family: "Agency FB";
                left: 10vw;
                font-size: 5vw;
                top: -6vw;
            }

            a
            {
                position: relative;
                font-family: "Agency FB";
                font-size: 5vw;
                left: 3vw;
                color: black;
                text-decoration: none;
            }

      
            button
            {
                position: relative;
                left: 3vw;
                width:87%;
                height: 9vw;
                padding: 0.5vw;
                font-size: 5vw;
                font-family: "Agency FB";
                color: black;
                margin-top: 4vw;
                margin-bottom: 1vw;
                border:1px solid black;
                cursor: pointer;
            }


            .text
            {
                position: absolute;
                left: 3.9vw;
                top: 25.3vw;
                background-color: aliceblue;
                width: 9%;
                height: 7.5vw;
                border:1px solid black;
            }


            .password
            {
                position: absolute;
                left: 3.9vw;
                top: 38.9vw;
                background-color: aliceblue;
                width: 9%;
                height: 7.1vw;
                border:1px solid black;
            }
            

            .confirm_password
            {
                position: absolute;
                left: 3.9vw;
                top: 52.9vw;
                background-color: aliceblue;
                width: 9%;
                height: 7.1vw;
                border:1px solid black;
            }        
            

            }
            

         

        </style>

    </head>
    <body>
  
        <title>Sign Up</title>
    <div class="leftcolumn">
        <img src="Images/login/Sign Up.gif" width="80%" height="100%">
        <div class="icon"><img src="Images/travellogo.png" width="100%" height="100%"></div>
        <div class="tag">Sign Up and get ready to Travel the World With us ...</div>
    </div>

    <div class="rightcolumn">
        <a href="Signup_Form.html" class="home"> <b> << Back </b></a>
        <form>
        <h1>Sign Up</h1>
        <input type="text" placeholder="User ID" id="text" required><div class="text"><img src="Images/login/user.png" width="100%" height="100%"></div></input>
        <br>
        <input type="password" placeholder="Password" id="password" required><div class="password"><img src="Images/login/password.png" width="100%" height="100%"></div></input>
        <br>
        <input type="password" placeholder="Confirm Password" id="password" required><div class="confirm_password"><img src="Images/login/password.png" width="100%" height="100%"></div></input>
        <br>
        <input type="checkbox"><div class="text1"><b>I Agree to all the<a href="#" style="text-decoration: underline;left: 0.5vw;top: 0vw;">Terms & Conditions</a></b></div></input>
        <a href="Sign_In.html"><b>Already have an Account ?</b></a>
        <br>
        <button class="button">Sign Up</button>
        <br>
    </form>
    </div>
</body> 
    
</html>