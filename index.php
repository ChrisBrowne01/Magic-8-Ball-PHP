<?php
// Defines Magic 8-Ball function
function magic8Ball() {
  // Prompt player to ask a yes or no question
  echo "Tell me... what is your \"yes\" or \"no\" question?\n";
  
  // Input user question
  $question = readline(">>");

  // States the question has been recieved
  echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have contacted the spirit world.\nHere is your answer: "; 

  // Generates random integer number between 0 and 19
  $choice = rand(0, 19);

  // Test random number
  // echo $choice;
  
  // Add the conditional logic
  switch ($choice){
    case 0:
      echo "It is certain.";
      break;
    case 1:
      echo "It is decidedly so.";
      break;
    case 2:
      echo "Without a doubt.";
      break;
    case 3:
      echo "Yes - definitely.";
      break;
    case 4:
      echo "You may rely on it.";
      break;
    case 5:
      echo "As I see it, yes.";
      break;
    case 6:
      echo "Most likely.";
      break;
    case 7:
      echo "Outlook good.";
      break;
    case 8:
      echo "Yes.";
      break;
    case 9:
      echo "Signs point to yes.";
      break;
    case 10:
      echo "Reply hazy, try again.";
      break;
    case 11:
      echo "Ask again later.";
      break;
    case 12:
      echo "Better not tell you now.";
      break;
    case 13:
      echo "Cannot predict now.";
      break;
    case 14:
      echo "Concentrate and ask again.";
      break;
    case 15:
      echo "Don't count on it.";
      break;
    case 16:
      echo "My reply is no.";
      break;
    case 17:
      echo "My sources say no.";
      break;
    case 18:
      echo "Outlook not so good.";
      break;
    case 19:
      echo "Very doubtful.";
      break;
    default:
      echo "Sorry but the spirt world can't answer that question, ask again.";
  }
}

// Invoke the magic8Ball() function
magic8Ball();