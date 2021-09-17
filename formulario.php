<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="formulari.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="header">
    <h1>Formulario</h1>
</div>
<form action="procesar.php" method="post">
    <div class="formulario">

        <div class="general">
            <div class="personal">
                <input type="hidden" name="code" value="<?php echo uniqid();?>">
                <input type="text" name="name" id="" placeholder="Your Name" required>
                <input type="text" name="surname" id="" placeholder="Your Surname" required>
                <input type="email" name="email" id="" placeholder="Your Email" required>
                <input type="text" name="phone" id="" placeholder="Your Phone Number" required>
                <input type="text" name="city" id="" placeholder="Your City" required>
                <input type="text" name="state" id="" placeholder="Your State" required>
                <input type="text" name="zipcode" id="" placeholder="Your Zipcode" required>
                

            </div>
            <div class="viaje">
              
              
                 <select  name="duration" required>
                 <option value="">Choose duration</option>
               <option value="about-a-week">About a week</option>
               <option value="two-to-three-weeks">Two to three weeks</option>
               <option value="a-month-or-more">A month or more</option>
               </select> 
               
                 <select  name="season" required>
                 <option value="">Choose season</option>
               <option value="spring">Spring</option>
               <option value="summer">Summer</option>
               <option value="winter">Winter</option>
               <option value="autumm">Autumm</option>
               </select> 
               
                 <select id="travel" name="travellers" required>
                 <option value="">Choose travellers</option>
               <option value="individual">Individual</option>
               <option value="couple">Couple</option>
               <option  value="family">Family</option>
               <option value="group">Group</option>
               </select>
               <div id="child">
                   
               <input type="checkbox" name="children" value="Travel with children">
               <label>Travel with children</label>
               
               </div>
               <p>Trip type</p>
               <br>
               <div class="check">
               <input type="radio" name="triptype" value="leisure">
               <label>Mostly leisure (With cultural and gourmet )</label><br>
               </div>
               <div class="check">
               <input type="radio"  name="triptype" value="cultural">
               <label >Mostly cultural (With gourmet and leisure attractions)</label><br>
               </div>
               <div class="check">
               <input type="radio" name="triptype" value="gourmet">
               <label>Mostly gourmet (With cultural attractions and leisure)</label><br>
               </div>
               <div class="check">
               <input type="radio" name="triptype" value="adventure">
               <label>Adventure trip (With cultural, gourmet and leisure attractions) </label><br>
               </div>
               <br>
               <p>Specifications if applicables</p>
               <br>
              
               <div class="check">
               <input type="checkbox"  name="specifications[]" value="romantic">
               <label >Romantic Trip</label><br>
               </div>
               <div class="check">
               <input type="checkbox" name="specifications[]" value="reduced">
               <label>Movility reduced</label><br>
               </div>
              
            </div>
            
        </div>
        
                <p class="tit">Countries interest</p>
         <div class="paises">
                <p>Northern Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Denmark">
               <label>Denmark</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Finland">
               <label> Finland</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Iceland">
               <label>Iceland</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Norway">
               <label>Norway</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Sweden">
               <label>Sweden</label><br>
               </div>
            
           </div>
           <p>Western Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="France">
               <label>France</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Luxembourg">
               <label> Luxembourg</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Belgium">
               <label>Belgium</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Netherlands">
               <label> Netherlands</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="United Kingdom">
               <label>United Kingdom</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Liechtenstein">
               <label> Liechtenstein</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Ireland">
               <label>Ireland</label><br>
               </div>
            
           </div>
           <p>Central Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Austria">
               <label>Austria</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Czech Republic">
               <label> Czech Republic</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Germany">
               <label> Germany</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Hungary">
               <label> Hungary</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Poland">
               <label>Poland</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Slovakia">
               <label> Slovakia</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Slovenia">
               <label> Slovenia</label><br>
               </div>
               <div>   
               <input type="checkbox" name="destinity[]" value=" Switzerland">
               <label> Switzerland</label><br>
               </div>
            
           </div>
           <p>Southwest Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Andorra">
               <label>Andorra</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Portugal">
               <label> Portugal</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Spain">
               <label> Spain</label><br>
               </div>
        
            
           </div>
           <p>Southern Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Italy">
               <label>Italy</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Cyprus">
               <label> Cyprus</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Monaco">
               <label> Monaco</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Greece">
               <label>Greece</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Malta">
               <label> Malta</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="San Marino">
               <label> San Marino</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Vatican City">
               <label> Vatican City</label><br>
               </div>
        
            
           </div>
           <p>Southeast Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Albania">
               <label>Albania</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Bosnia and Herzegovina">
               <label> Bosnia and Herzegovina</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Bulgaria">
               <label> Bulgaria</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Croatia">
               <label>Croatia</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Kosovo">
               <label> Kosovo</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Moldova">
               <label>  Moldova</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Montenegro">
               <label> Montenegro</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Republic of Macenodia">
               <label> Republic of Macenodia</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Romania">
               <label>  Romania</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Serbia">
               <label> Serbia</label><br>
               </div>
        
            
           </div>
           <p>Eastern Europe</p>
             <div class="uno">
              <div>
               <input type="checkbox" name="destinity[]" value="Armenia">
               <label>Armenia</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Azerbaijan">
               <label>Azerbaijan</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Belarus">
               <label> Belarus</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Georgia">
               <label>Georgia</label>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Latvia">
               <label> Latvia</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Lithuania">
               <label>  Lithuania</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value="Estonia">
               <label> Estonia</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Russia">
               <label> Russia</label><br>
               </div>
               <div>
               <input type="checkbox" name="destinity[]" value=" Ukraine">
               <label>Ukraine</label><br>
               </div>
             
        
            
           </div>
                </div>
        </div>
        <div class="mensaje">
            <textarea name="message2" placeholder="Write here ...." id="" cols="100" rows="10"></textarea>
        </div>
        <div class="envio">
            <div>
            <input type="radio"  name="legal" required>
            <label>I aprove <span><a href="">RGPD</a></span></label><br>
            </div>
            <div>
                <input type="submit" name="send" class="boton" value="Contact us">
            </div>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){ 
     $('#travel').on('change', function() { 
     if ( this.value == 'family'){ 
     	$("#child").show(); 
     } 
     else{ 
     	$("#child").hide(); 
     } 
     }); 
    }); 
</script>
</body>
</html>