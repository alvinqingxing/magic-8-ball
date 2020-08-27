<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Magic 8-Ball</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="question" placeholder="What is your question?" />
      <input type="submit" value="Ask the Magic 8-Ball" />
    </form>
    <img src="magic.png" width="250">
    <p><?= $_POST["question"]; ?></p>
    <div>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        switch (rand(0, 19)) {
          case 0:
            $message = "It is certain.\n";
            break;
          case 1:
            $message =  "It is decidedly so.\n";
            break;
          case 2:
            $message =  "Without a doubt.\n";
            break;
          case 3:
            $message =  "Yes - definitely.\n";
            break;
          case 4:
            $message =  "You may rely on it.\n";
            break;
          case 5:
            $message =  "As I see it, yes.\n";
            break;
          case 6:
            $message =  "Most likely.\n";
            break;
          case 7:
            $message =  "Outlook good.\n";
            break;
          case 8:
            $message =  "Yes.\n";
            break;
          case 9:
            $message =  "Signs point to yes.\n";
            break;
          case 10:
            $message =  "Reply hazy, try again.\n";
            break;
          case 11:
            $message =  "Ask again later.\n";
            break;
          case 12:
            $message =  "Better not tell you now.\n";
            break;
          case 13:
            $message =  "Cannot predict now.\n";
            break;
          case 14:
            $message =  "Concentrate and ask again.\n";
            break;
          case 15:
            $message =  "Don't count on it.\n";
            break;
          case 16:
            $message =  "My reply is no.\n";
            break;
          case 17:
            $message =  "My sources say no.\n";
            break;
          case 18:
            $message =  "Outlook not so good.\n";
            break;
          case 19:
            $message =  "Very doubtful.\n";
            break;
          }
        }
    ?>
    </div>
    <div>
      <p class="response">The Magic 8-Ball says</p>
      <?= $message ?>
      </div>
  </body>
</html>
