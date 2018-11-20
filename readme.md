# aws-cfn-template-with-lumen

CloudFormation Template付きのLumen テストAPIプロジェクト

## 概要

- 認証
    - Cognito -> APIGateway -> Lambdaからproxyされ、認証済みのAuthorizationヘッダにてAPIが呼ばれる

- サーバ構成
    - ALB -> web AutoScaling multiAZ
    - RDS -> Aurora multiAZ Read Replica

- 導入CMD

```
$ composer --version
Composer version 1.7.2 2018-08-16 16:57:12
$ lumen --version
Lumen Installer version 1.0.2
$ composer create-project laravel/lumen aws-cfn-template-with-lumen "5.7.*"
```


## CloudFormation環境構築

aws-cfn-template-with-lumen.templateをCFNに流し込むだけです。
起動時パラメータに指定したENVによって、「.env.[ENV]」が.envに昇格します。

## License

under the [MIT license](http://opensource.org/licenses/MIT)
