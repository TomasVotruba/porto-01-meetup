# 3 PHPStan packages to Make you more frustrated

@todo always how to run + link to the package + link to the post :)

## Install me

```bash
git@github.com:TomasVotruba/porto-01-meetup.git
cd porto-01-meetup

composer install
```

<br>

## 1. Find Unused code

* package: https://github.com/TomasVotruba/unused-public

```bash
# install
composer require phpstan/extension-installer --dev
composer require TomasVotruba/unused-public --dev
```

* post: https://tomasvotruba.com/blog/can-phpstan-find-dead-public-methods/

<br>

## 2. Lower Cognitive Complexity

* package: https://github.com/TomasVotruba/cognitive-complexity

```bash
# install
composer require phpstan/extension-installer --dev
composer require TomasVotruba/cognitive-complexity --dev
```

* post: https://tomasvotruba.com/blog/keep-cognitive-complexity-low-with-phpstan/

```demo
vendor/bin/phpstan analyse --configuration phpstan-cognitive-complexity.neon
```

* <br>

## 3. Increase Type Coverage

* package: https://github.com/TomasVotruba/type-coverage

```bash
# install
composer require phpstan/extension-installer --dev
composer require TomasVotruba/type-coverage --dev
```

* post: https://tomasvotruba.com/blog/how-to-measure-your-type-coverage/

<img src="/images/type_coverage_trends.png">
