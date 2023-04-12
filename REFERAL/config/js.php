    

    <script language="javascript" type="text/javascript">
        let now = new Date();
        let timeNow = now.getHours();
        let minutesNow = now.getMinutes();
        let welcomeText;

        let copyright = document.querySelector(".copyright");
        copyright.textContent = "Hospital Referal System © "+now.getFullYear();
        
        let welcome = document.querySelector(".welcome p");
        if(timeNow>=0 && timeNow<12){
            welcomeText = "Good Morning, welcome to the referal system";
        } else if(timeNow>=12 && timeNow<=17){
            welcomeText = "Good Afternoon, welcome to the referal system";
        } else{
            welcomeText = "Good Night, welcome to the referal system";
        }
        welcome.textContent = welcomeText;
        welcome.style = "color: white; font-size: 45px;";

            

        
    </script>
</body>
</html>