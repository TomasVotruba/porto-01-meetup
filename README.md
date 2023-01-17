# 3 PHPStan packages to Rock Your World 😎

<br>

## Do you want to try it? Install me

```bash
git@github.com:TomasVotruba/porto-01-meetup.git
cd porto-01-meetup

composer install
```

<br>

## 1. Find Unused code

* [Package on Github](https://github.com/TomasVotruba/unused-public)
* [Read a post](https://tomasvotruba.com/blog/can-phpstan-find-dead-public-methods/)

Install package to your project:

```bash
composer require tomasvotruba/unused-public phpstan/extension-installer --dev
```

Run this demo:

```demo
vendor/bin/phpstan analyse --configuration phpstan-unused-public.neon
```

<br>

## 2. Lower Cognitive Complexity

* [Package on Github](https://github.com/tomasvotruba/cognitive-complexity)
* [Read a Post](https://tomasvotruba.com/blog/keep-cognitive-complexity-low-with-phpstan/)

Install package to your project:

```bash
composer require tomasvotruba/cognitive-complexity phpstan/extension-installer --dev
```

Run this demo:

```demo
vendor/bin/phpstan analyse --configuration phpstan-cognitive-complexity.neon
```

<br>

## 3. Increase Type Coverage

* [Package on Github](https://github.com/tomasvotruba/type-coverage)
* [Read a post](https://tomasvotruba.com/blog/how-to-measure-your-type-coverage/)

Install package to your project:

```bash
composer require tomasvotruba/type-coverage phpstan/extension-installer --dev
```

Run this demo:

```demo
vendor/bin/phpstan analyse --configuration phpstan-type-coverage.neon
```

<br>

## Pro tip 🤓

Measure your coverage in time. It will make you feel better about your progress :)

<br>

<img src="/images/type_coverage_trends.png" style="width: 45em">

<br>
<br>
<br>

## Thank You 🤗

Open this repository with your amazing phone ↓

<img src="/images/qr-code.png">

<br>
