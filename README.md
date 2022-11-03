<img src="https://media.giphy.com/media/3Hm4TlhPjZu3C/giphy.gif" width="100%">

# Siris Stable

The elephpant in the room — or the horses in the stable. This project is testing how far I've come on my way to becoming a fullblown fullstack web developer! Starting with some PHP, HTML, CSS and just a little sprinkle of JavaScript.

To pet some horses and test your random skills in showjumping:
[Siris Stable](https://sirisjolin.se/siris-stable)

# Installation

1. Clone the repo in the terminal or your client of choice.

```bash
$ git clone https://github.com/sirisayshello/elephpant-stable.git
```

2. Install php.

```bash
$ brew install php
```

3. Start a server in the root folder.

```bash
$ php -S localhost:8000
```

4. Navigate to http://localhost:8000 in your browser.

5. Play with horses.

# Code Review

Code review written by [Robin Persson](https://github.com/Robinpn).

Vilken mysig och rolig webbplats du har skapat! Tyckte att det var väldigt roligt att gå igenom alla alternativen och se resultaten.

1. `variables.php:11` - Här skulle du kunnat ha skrivit ut höjden som en int och lagt till cm som en string, isstället för att skriva ut allt som en string. Tycker att det blir lite lättare att förstå då
2. `stable.php: 5` - Du behöver inte använda **DIR** utan det räcker med require.
3. `horse.php: 60-61` - Istället för att använda onClick() kan du sätta en eventlistener i en js fil eller script tagen.
4. `horse.php: 74 & 79` - Istället för att använda remove() hade du kunna använda toggle(). Funkar bättre om användaren vill bli av med texten eller testa funktionen igen.
5. `horse.php: 71-81` - Du hade kunna läga dina js scripts i en separat fil isstället för att scriva in dem direkt i php filen. Jag tycker att koden blir lite "renare" då

# Testers

Tested by the following people:

1. Jane Doe
2. John Doe
