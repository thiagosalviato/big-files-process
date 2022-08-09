## Big Files Process

For implement this solution I use this concepts:
- Generators;
- Fiber;

## Explanation
The big point of the solution is to limit its infrastructure, where it is not possible for your application to load a huge file in memory, in this way
I used Generators that work with Coroutines and Fibers that also allow working with Coroutines in PHP 8.1 >

The idea of coroutines is to allow a process to stop, return to the main function, and then come back to the same point to continue executing the process.
The coroutines idea allows you to work asynchronously!

## How to execute the Project: 

1 - Clone this repository:
```shell
git clone git@github.com:thiagosalviato/big-files-process.git
```

2 - Create the huge file:
```shell
php file-generator.php
```

3 - To run using generators:
```shell 
cd src/Generators
php generators.php
```

4 - To run using Fibers run:
```shell 
cd src/Fibers
php fibers.php
```

>To run using Fibers it is necessary to use PHP 8.1

