# aws-cfn-template-with-lumen

CloudFormation Template付きのLumen テストAPIプロジェクト

## 概要

- 認証
    - Cognito -> APIGateway -> Lambdaからproxyされ、認証済みのAuthorizationヘッダにてAPIが呼ばれる

- サーバ構成
    - ALB -> web AutoScaling multiAZ
    - RDS -> Aurora multiAZ Read Replica

## License

under the [MIT license](http://opensource.org/licenses/MIT)
