import json
import urllib.request
import ssl
ssl._create_default_https_context = ssl._create_unverified_context

import logging
logger = logging.getLogger()
logger.setLevel(logging.INFO)

def lambda_handler (event, context):
    logger.info(event['path'])
    # URLはenv毎に書き換える
    url = "https://aws-cfn-ALB-1R1R6Z1HOCXU8-1767041247.ap-northeast-1.elb.amazonaws.com" + event['path']
    req = urllib.request.Request(url, method=event['httpMethod'])
    with urllib.request.urlopen(req) as res:
        body = res.read().decode("utf-8")
        httpStatusCode = res.getcode()
    result = {"message": body}
    return {
        "isBase64Encoded": False,
        "statusCode": httpStatusCode,
        "headers": { "Access-Control-Allow-Origin" : "http://localhost:8080" },
        "body": json.dumps(result)
    }
