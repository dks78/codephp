<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
<div class="forme1">
    <form  action="form.php" method="gets">
        <div>
            <label for="name">Nom :</label>
            <input type="text"  id="name"  name="user_name">
        </div>
        <div>
            <label  for="email">Courriel :</label>
            <input  type="email"  id="email"  name="user_email">
        </div>
        <div>
            <label for="subject">Choose a pet:</label>
            <select name="subject" id="subject">
                <option value="">--Please choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>
        </div>
        <div>
            <label  for="phone">numero de téléphone</label>
            <input  id="phone"  name="phone">
        </div>
        <div>
            <label  for="message">message</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</div>
</body>
</html>




