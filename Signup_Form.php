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
                height: 70vw;
                z-index:-1;
            }

            .leftcolumn .icon
            {
                position:absolute;
                top: 0.5vw;
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
                left: 25%;
                bottom: 3%;
                font-family: "Agency FB";
                font-size:5vw ;
                text-align: center;
            }

                
            .rightcolumn
            {
                position: absolute;
                width: 35%;
                height: 70vw;
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

            .container
            {
                position: relative;
                width: 30vw;
                height: 4.1vw;
                left: 2vw;
            }


            input[type=text]
            {
                position: relative;
                width:23.4vw;
                float: right;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                border:1px solid black;
                margin-bottom: 1vw;
                font-family: "Agency FB";

            }


            input[type=email]
            {
                position: relative;
                width:23.4vw;
                float: right;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                border:1px solid black;
                margin-bottom: 1vw;
                font-family: "Agency FB";

            }
            
            
            input[type=date]
            {
                position: relative;
                left: 2vw;
                width:37%;
                height: 2vw;
                padding: 1vw;
                font-size: 1.7vw;
                color: black;
                margin-top: 1vw;
                margin-bottom: 1.5vw;
                border:1px solid black;
                font-family: "Agency FB";
            }

            select
            {
            position:relative;
            top: 1vw; 
            width: 35%;
            height:4.1vw;
            right: 3vw;
            font: 2vw  Agency FB;
            color: var(--baseFg);
            border: 1px solid black;
            line-height: 1;
            outline: 0;
            padding:0.5vw;
            background-color:white;
            float: right;
            }

            .select1
            {
            position:relative;
            top: 1vw; 
            width: 86%;
            left: -3vw;
            height:4.1vw;
            font: 2vw  Agency FB;
            color: var(--baseFg);
            border: 1px solid black;
            line-height: 1;
            outline: 0;
            padding:0.5vw;
            background-color:white;
            margin-bottom: 3vw;
            }


            a
            {
                position: relative;
                font-family: "Agency FB";
                font-size: 2vw;
                left: 3vw;
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
                left: -1vw;
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

           


            @media only screen and (max-width:600px) {

            .leftcolumn {
                top: 0%;
                left: 0%;
                position: absolute;
                width: 100%;
                height: 90%;
                margin-top: 5vw;
                margin-left: 3vw;
            }

            .rightcolumn {
                position: absolute;
                top: 90%;
                width: 100%;
                height: 85%;
            }

            .leftcolumn .icon
            {
                position:absolute;
                top: -3vw;
                left: 2vw;
                width: 33vw;
                height: 15vw;
                z-index: 1;
            }
            
            .leftcolumn .tag
            {
                position: absolute;
                color: black;
                width: 60%;
                left: 27%;
                bottom: 10%;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;
                font-size:7vw ;
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


            .container
            {
                position: relative;
                width: 90vw;
                height: 8vw;
                left: 3vw;
            }


            input[type=text]
            {
                position: relative;
                width:73.9vw;
                float: right;
                height: 5.3vw;
                padding: 1vw;
                font-size: 5vw;
                color: black;
                border:1px solid black;
                margin-bottom: 1vw;
                font-family: "Agency FB";

            }


            input[type=email]
            {
                position: relative;
                width:73.9vw;
                float: right;
                height: 5.3vw;
                padding: 1vw;
                font-size: 5vw;
                color: black;
                border:1px solid black;
                margin-bottom: 1vw;
                font-family: "Agency FB";

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

            input[type=date]
            {
                position: relative;
                left: 3vw;
                width:37%;
                height: 5vw;
                padding: 1vw;
                font-size: 4.7vw;
                color: black;
                margin-top: 1vw;
                margin-bottom: 1.5vw;
                border:1px solid black;
                font-family: "Agency FB";
            }

            select
            {
            position:relative;
            top: 1vw; 
            width: 45%;
            height:7vw;
            right: 7vw;
            font: 5vw  Agency FB;
            color: var(--baseFg);
            border: 1px solid black;
            line-height: 1;
            outline: 0;
            padding:0.5vw;
            background-color:white;
            float: right;
            }

            .select1
            {
            position:relative;
            top: 1vw; 
            width: 90%;
            left: -7vw;
            height:7.5vw;
            font: 5vw  Agency FB;
            color: var(--baseFg);
            border: 1px solid black;
            line-height: 1;
            outline: 0;
            padding:0.5vw;
            background-color:white;
            margin-bottom: 5vw;
            margin-top: 3vw;
            }


            .text
            {
                position: absolute;
                left: 3.9vw;
                top: 25.3vw;
                background-color: aliceblue;
                width: 9%;
                height: 7.1vw;
                border:1px solid black;
            }


            .email
            {
                position: absolute;
                left: 3.9vw;
                top: 38.9vw;
                background-color: aliceblue;
                width: 9%;
                height: 7.1vw;
                border:1px solid black;
            }
            

            .contact
            {
                position: absolute;
                left: 3.9vw;
                top: 52.5vw;
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
        <div class="tag"><b>Sign Up and get ready to Travel the World With us ...</b></div>
    </div>

    <div class="rightcolumn">
        <a href="Home.php" class="home"> <b> << Back To Home</b></a>
        <form>
        <h1>Sign Up</h1>

        <div class="container">
        <input type="text" placeholder="Full Name" required><img src="Images/login/name.png" width="15%" height="100%" style="position: absolute;float: left;"></input>
        </div>
        <br>

        <div class="container">
            <input type="email" placeholder="Email" required><img src="Images/login/mail.png" width="15%" height="100%" style="position: absolute;float: left;"></input>
        </div>
        <br>

        <div class="container">
            <input type="text" placeholder="Contact Number" required><img src="Images/login/contact.png" width="15%" height="100%" style="position: absolute;float: left;"></input>
        </div>
        <br>

        <input type="date" name="date" id="dob">

        <select id="Gender" name="Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        <br>
        <select id="Country" name="Country" class="select1">
            
            <option value="">	Afghanistan	</option>
            <option value="">	Albania	</option>
            <option value="">	Algeria	</option>
            <option value="">	Andorra	</option>
            <option value="">	Angola	</option>
            <option value="">	Antigua and Barbuda	</option>
            <option value="">	Argentina	</option>
            <option value="">	Armenia	</option>
            <option value="">	Australia	</option>
            <option value="">	Austria	</option>
            <option value="">	Austrian Empire	</option>
            <option value="">	Azerbaijan	</option>
            <option value="">	Baden	</option>
            <option value="">	Bahamas, The	</option>
            <option value="">	Bahrain	</option>
            <option value="">	Bangladesh	</option>
            <option value="">	Barbados	</option>
            <option value="">	Bavaria	</option>
            <option value="">	Belarus	</option>
            <option value="">	Belgium	</option>
            <option value="">	Belize	</option>
            <option value="">	Benin (Dahomey)	</option>
            <option value="">	Bolivia	</option>
            <option value="">	Bosnia and Herzegovina	</option>
            <option value="">	Botswana	</option>
            <option value="">	Brazil	</option>
            <option value="">	Brunei	</option>
            <option value="">	Brunswick and Lüneburg	</option>
            <option value="">	Bulgaria	</option>
            <option value="">	Burkina Faso (Upper Volta)	</option>
            <option value="">	Burma	</option>
            <option value="">	Burundi	</option>
            <option value="">	Cabo Verde	</option>
            <option value="">	Cambodia	</option>
            <option value="">	Cameroon	</option>
            <option value="">	Canada	</option>
            <option value="">	Cayman Islands, The	</option>
            <option value="">	Central African Republic	</option>
            <option value="">	Central American Federation	</option>
            <option value="">	Chad	</option>
            <option value="">	Chile	</option>
            <option value="">	China	</option>
            <option value="">	Colombia	</option>
            <option value="">	Comoros	</option>
            <option value="">	Congo Free State, The	</option>
            <option value="">	Costa Rica	</option>
            <option value="">	Cote d’Ivoire (Ivory Coast)	</option>
            <option value="">	Croatia	</option>
            <option value="">	Cuba	</option>
            <option value="">	Cyprus	</option>
            <option value="">	Czechia	</option>
            <option value="">	Czechoslovakia	</option>
            <option value="">	Democratic Republic of the Congo	</option>
            <option value="">	Denmark	</option>
            <option value="">	Djibouti	</option>
            <option value="">	Dominica	</option>
            <option value="">	Dominican Republic	</option>
            <option value="">	Duchy of Parma, The	</option>
            <option value="">	East Germany (German Democratic Republic)	</option>
            <option value="">	Ecuador	</option>
            <option value="">	Egypt	</option>
            <option value="">	El Salvador	</option>
            <option value="">	Equatorial Guinea	</option>
            <option value="">	Eritrea	</option>
            <option value="">	Estonia	</option>
            <option value="">	Eswatini	</option>
            <option value="">	Ethiopia	</option>
            <option value="">	Federal Government of Germany (1848-49)	</option>
            <option value="">	Fiji	</option>
            <option value="">	Finland	</option>
            <option value="">	France	</option>
            <option value="">	Gabon	</option>
            <option value="">	Gambia, The	</option>
            <option value="">	Georgia	</option>
            <option value="">	Germany	</option>
            <option value="">	Ghana	</option>
            <option value="">	Grand Duchy of Tuscany, The	</option>
            <option value="">	Greece	</option>
            <option value="">	Grenada	</option>
            <option value="">	Guatemala	</option>
            <option value="">	Guinea	</option>
            <option value="">	Guinea-Bissau	</option>
            <option value="">	Guyana	</option>
            <option value="">	Haiti	</option>
            <option value="">	Hanover	</option>
            <option value="">	Hanseatic Republics	</option>
            <option value="">	Hawaii	</option>
            <option value="">	Hesse	</option>
            <option value="">	Holy See	</option>
            <option value="">	Honduras	</option>
            <option value="">	Hungary	</option>
            <option value="">	Iceland	</option>
            <option value="">	India	</option>
            <option value="">	Indonesia	</option>
            <option value="">	Iran	</option>
            <option value="">	Iraq	</option>
            <option value="">	Ireland	</option>
            <option value="">	Israel	</option>
            <option value="">	Italy	</option>
            <option value="">	Jamaica	</option>
            <option value="">	Japan	</option>
            <option value="">	Jordan	</option>
            <option value="">	Kazakhstan	</option>
            <option value="">	Kenya	</option>
            <option value="">	Kingdom of Serbia/Yugoslavia	</option>
            <option value="">	Kiribati	</option>
            <option value="">	Korea	</option>
            <option value="">	Kosovo	</option>
            <option value="">	Kuwait	</option>
            <option value="">	Kyrgyzstan	</option>
            <option value="">	Laos	</option>
            <option value="">	Latvia	</option>
            <option value="">	Lebanon	</option>
            <option value="">	Lesotho	</option>
            <option value="">	Lew Chew (Loochoo)	</option>
            <option value="">	Liberia	</option>
            <option value="">	Libya	</option>
            <option value="">	Liechtenstein	</option>
            <option value="">	Lithuania	</option>
            <option value="">	Luxembourg	</option>
            <option value="">	Madagascar	</option>
            <option value="">	Malawi	</option>
            <option value="">	Malaysia	</option>
            <option value="">	Maldives	</option>
            <option value="">	Mali	</option>
            <option value="">	Malta	</option>
            <option value="">	Marshall Islands	</option>
            <option value="">	Mauritania	</option>
            <option value="">	Mauritius	</option>
            <option value="">	Mecklenburg-Schwerin	</option>
            <option value="">	Mecklenburg-Strelitz	</option>
            <option value="">	Mexico	</option>
            <option value="">	Micronesia	</option>
            <option value="">	Moldova	</option>
            <option value="">	Monaco	</option>
            <option value="">	Mongolia	</option>
            <option value="">	Montenegro	</option>
            <option value="">	Morocco	</option>
            <option value="">	Mozambique	</option>
            <option value="">	Namibia	</option>
            <option value="">	Nassau	</option>
            <option value="">	Nauru	</option>
            <option value="">	Nepal	</option>
            <option value="">	Netherlands, The	</option>
            <option value="">	New Zealand	</option>
            <option value="">	Nicaragua	</option>
            <option value="">	Niger	</option>
            <option value="">	Nigeria	</option>
            <option value="">	North German Confederation	</option>
            <option value="">	North German Union	</option>
            <option value="">	North Macedonia	</option>
            <option value="">	Norway	</option>
            <option value="">	Oldenburg	</option>
            <option value="">	Oman	</option>
            <option value="">	Orange Free State	</option>
            <option value="">	Pakistan	</option>
            <option value="">	Palau	</option>
            <option value="">	Panama	</option>
            <option value="">	Papal States	</option>
            <option value="">	Papua New Guinea	</option>
            <option value="">	Paraguay	</option>
            <option value="">	Peru	</option>
            <option value="">	Philippines	</option>
            <option value="">	Piedmont-Sardinia	</option>
            <option value="">	Poland	</option>
            <option value="">	Portugal	</option>
            <option value="">	Qatar	</option>
            <option value="">	Republic of Genoa	</option>
            <option value="">	Republic of Korea (South Korea)	</option>
            <option value="">	Republic of the Congo	</option>
            <option value="">	Romania	</option>
            <option value="">	Russia	</option>
            <option value="">	Rwanda	</option>
            <option value="">	Saint Kitts and Nevis	</option>
            <option value="">	Saint Lucia	</option>
            <option value="">	Saint Vincent and the Grenadines	</option>
            <option value="">	Samoa	</option>
            <option value="">	San Marino	</option>
            <option value="">	Sao Tome and Principe	</option>
            <option value="">	Saudi Arabia	</option>
            <option value="">	Schaumburg-Lippe	</option>
            <option value="">	Senegal	</option>
            <option value="">	Serbia	</option>
            <option value="">	Seychelles	</option>
            <option value="">	Sierra Leone	</option>
            <option value="">	Singapore	</option>
            <option value="">	Slovakia	</option>
            <option value="">	Slovenia	</option>
            <option value="">	Solomon Islands, The	</option>
            <option value="">	Somalia	</option>
            <option value="">	South Africa	</option>
            <option value="">	South Sudan	</option>
            <option value="">	Spain	</option>
            <option value="">	Sri Lanka	</option>
            <option value="">	Sudan	</option>
            <option value="">	Suriname	</option>
            <option value="">	Sweden	</option>
            <option value="">	Switzerland	</option>
            <option value="">	Syria	</option>
            <option value="">	Tajikistan	</option>
            <option value="">	Tanzania	</option>
            <option value="">	Texas	</option>
            <option value="">	Thailand	</option>
            <option value="">	Timor-Leste	</option>
            <option value="">	Togo	</option>
            <option value="">	Tonga	</option>
            <option value="">	Trinidad and Tobago	</option>
            <option value="">	Tunisia	</option>
            <option value="">	Turkey	</option>
            <option value="">	Turkmenistan	</option>
            <option value="">	Tuvalu	</option>
            <option value="">	Two Sicilies	</option>
            <option value="">	Uganda	</option>
            <option value="">	Ukraine	</option>
            <option value="">	Union of Soviet Socialist Republics	</option>
            <option value="">	United Arab Emirates, The	</option>
            <option value="">	United Kingdom, The	</option>
            <option value="">	Uruguay	</option>
            <option value="">	Uzbekistan	</option>
            <option value="">	Vanuatu	</option>
            <option value="">	Venezuela	</option>
            <option value="">	Vietnam	</option>
            <option value="">	Württemberg	</option>
            <option value="">	Yemen	</option>
            <option value="">	Zambia	</option>
            <option value="">	Zimbabwe	</option>

        </select>
        <br>
        <a href="Sign_In.php"><b>Already Have an Account ?</b></a>
        <br>
    </form>
    <a href="Signup_Register.php"><button class="button" >Next ></button></a>
    </div>
</body> 
    
</html>
