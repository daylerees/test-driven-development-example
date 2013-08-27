# Test-Driven Development (TDD) Example

> Writing tests before code sounds silly doesn't it? I'm going to show you how it can be useful!

## What is it?

Test driven development is the practice of writing a failing test (unit or functional or whatever..) before writing the code that will make the test pass. It gives you a goal to work at, and forces you to think about how accessible your code is. It can also be used to gain confidence within your codebase.

## Who wrote it?

Hi! I'm [Dayle Rees](http://daylerees.com).

I'm an open source enthusiast, and a [Laravel framework](http://laravel.com) core developer. I'm also very fond of teaching. My books [Code Bright](http://leanpub.com/codebright) and [Code Happy](http://leanpub.com/codehappy) have helped thousands of PHP web developers adopt the Laravel PHP framework.

My writing style is simple and plain spoken, just like this description!

## How do I learn?

It's easy, see those `part-x` directories? Each of them represent our complete application at a different point of time. Starting at `part-1` we have an application that does nothing. Throughout the parts we will implement tests, and then the functionality to cause them to pass.

To learn, you need only read the comments held within. First take a look at the architecture of the application within the `part-x/src` directory, and all comments held within the classes. It's not a big application, less than five files. Next look at the associated test files within the `part-x/tests` directory to learn more about the limitations of each stage of the applications development.

Don't forget to run `phpunit` from the `part-x` directory to examine the test results.

By the time you get to part 19, you will be a TDD master.

## How does it work?

Each part of the repository contains a complete PHP application in various stages of its lifecycle. They each function independently. Class loading is provided by the [composer](http://getcomposer.org/) project so you will find a `composer.json` stored within.

However, you will not need to have a copy of composer to run the tests. I've versioned the vendor directories along with each stage so that you can run the tests right away! Lucky you!

Our application files are `psr-0` autoloaded (file structure and path matching namespace) from the `part-x/src` directories. All tests are located within the `part-x/tests` directory, and each stage contains a `phpunit.xml` bootstrap so that you can run the tests with only the `phpunit` command.

## Any other advice?

Read through each stage carefully, noting the differences between previous stages. Normally these are outlined in the comments. Get to know the architecture, and visualize the workflow.

I'd recommend cloning the repository down locally so you can view the source in a syntax-highlighting editor, and run the tests directly.

## How can I thank you?

Why not buy my latest Laravel book? Laravel is a beautiful framework that makes excellent use of the dependency injection and inversion of control principles. You can [get a copy here on Leanpub](http://leanpub.com/codebright).

Don't want to part with cash? Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/daylerees)!

Thanks!
Dayle.
