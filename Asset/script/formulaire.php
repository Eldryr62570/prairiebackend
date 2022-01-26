
<div class="myform">
    <div>
        <form action="mailer.php" class="formconfig" method="post">
        <?php 
        //Message de succés d'envoi du message
        if(isset($_SESSION['mysession'])){
                 if($_SESSION['mysession']==true){
                    echo '<div class="valid">Message envoyé au support !</div>';
                }   
            else{
                echo'<div class="invalid">Erreur d\'envoie du message :(</div>';
            }
        }
         ?>
            <label for="nom">Nom <em>*</em></label>
            <input id="nom" placeholder="Olivier Serre" name="name" autofocus="" required=""><br>
            <label for="telephone">Portable<em>*</em></label>
            <input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}" name="tel"><br>
            <label for="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">  <em>*</em></label>
            <input id="email" type="email" name="email" placeholder="prenom.nom@simplon.com" required>
            <label for="age">Age<em>*</em></label>
            <input id="age" type="number" name="age" placeholder="xx" pattern="[0-9]{2}" required=""><br>
            <label for="subject">Sujet :<em>*</em></label>
            <input id="subject" type="text" name="subject" placeholder="Indiquez le sujet du ticket"
                required=""><br>
            <label for="comments">Ticket :</label>
            <textarea id="comments" name="message"></textarea>
            <p><input type="submit" value="Soumettre"></p>
            

        </form>
    </div>
    </div>
    