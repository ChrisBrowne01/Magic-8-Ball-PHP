# Magic 8-Ball project using PHP

## Project Overview

The [Magic 8-Ball](https://en.wikipedia.org/wiki/Magic_8_Ball) is a popular toy used for fortune-telling or seeking advice.

This is a Magic 8-Ball web application built using PHP. The app allows users to ask a question and get a random answer from the 8-Ball.

## About

In this project, you’ll be creating a function that can answer any *“yes”* or *“no”* question.

![Magic 8-Ball, should I do this project?](https://content.codecademy.com/courses/learn-cpp/conditionals-and-logic/magic8ball.gif "Magic 8-Ball, should I do this project?")

  *"Magic 8-Ball, should I do this project?"*

The answers inside a standard Magic 8-Ball are:

- `It is certain.`
- `It is decidedly so.`
- `Without a doubt.`
- `Yes - definitely.`
- `You may rely on it.`
- `As I see it, yes.`
- `Most likely.`
- `Outlook good.`
- `Yes.`
- `Signs point to yes.`
- `Reply hazy, try again.`
- `Ask again later.`
- `Better not tell you now.`
- `Cannot predict now.`
- `Concentrate and ask again.`
- `Don't count on it.`
- `My reply is no.`
- `My sources say no.`
- `Outlook not so good.`
- `Very doubtful.`

- Your `magic8Ball()` will take in any *“yes”* or *“no”* question (as a string) and give a psychic (random) answer.


## Installation

1. Clone the repository
  ```bash
  git clone https://github.com/ChrisBrowne01/Magic-8-Ball-PHP.git
  ```

2. Install **PHP 7.4 or later** on your system, if not done so already. Then add the php directory to your system PATH environment variable and click "OK" to save. Shutdown all running command prompt for installation to take affect.

Test the installation by opening a command prompt and running the `php -v` command. You should see the version information of the installed PHP binary. 


3. Start a PHP server
  ```bash
  php -S localhost:8000
  ```

4. Open the app on your browser
  ```bash
  http://localhost:8000
  ```

## How to play

1. Open Terminal and type the follow and press "enter"
```bash
php index.php
```

2. Input a "yes" or "no" question where it is marked "`>>`"
```bash
>> [INPUT QUESTION HERE]
```

3. Press enter to recieve your anwser from the spirts. It will then ask if you qant ri ask another. Y/y, returns Yes; N/n or anyother key, returns No. Have fun!
Do you want to ask another question? (Y/N)
Here an example:
```bash
$ php index.php
Tell me... what is your "yes" or "no" question?
>> Should I do this project?
Hmm I see... Your question is Should I do this project?... I understand why this weighs on you... I have contacted the spirit world.
Here is your answer: Signs point to yes.
Do you want to ask another question? (Y/N)
>>N
Goodbye!
```

## Technologies used

- PHP

## Contributing

Contributions to the Magic 8-Ball project using PHP are welcome! If you have any bug fixes, feature requests, or other contributions, please submit a pull request or open an issue.

## Credits

This project was created by [Chris Browne](https://github.com/ChrisBrowne01).

The Magic 8-Ball image used in this project was obtained from [Codecademy Magic 8 Ball project](https://www.codecademy.com/paths/php-skill/tracks/php-conditionals-and-logic/modules/learn-php-booleans-and-comparison-operators-sp/projects/magic-8-ball).

## License

This project is licensed under the [MIT](./LICENSE) License.