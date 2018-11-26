import json
import urllib.parse
import urllib.request
import ssl
ssl._create_default_https_context = ssl._create_unverified_context

import logging
logger = logging.getLogger()
logger.setLevel(logging.INFO)

def lambda_handler (event, context):
    logger.info(event)
    url = "https://aws-cfn-ALB-1R1R6Z1HOCXU8-1767041247.ap-northeast-1.elb.amazonaws.com" + event['path']
    url += '?' + urllib.parse.urlencode(event['queryStringParameters']) if event['queryStringParameters'] is not None else ''
    data = urllib.parse.urlencode(json.loads(event['body'])).encode("utf-8") if event['body'] is not None else None
    req = urllib.request.Request(url, data=data, headers=event['headers'],  method=event['httpMethod'])
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
