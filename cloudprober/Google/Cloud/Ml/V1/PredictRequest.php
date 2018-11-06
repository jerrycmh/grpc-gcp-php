<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/prediction_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for predictions to be issued against a trained model.
 * The body of the request is a single JSON object with a single top-level
 * field:
 * <dl>
 *   <dt>instances</dt>
 *   <dd>A JSON array containing values representing the instances to use for
 *       prediction.</dd>
 * </dl>
 * The structure of each element of the instances list is determined by your
 * model's input definition. Instances can include named inputs or can contain
 * only unlabeled values.
 * Not all data includes named inputs. Some instances will be simple
 * JSON values (boolean, number, or string). However, instances are often lists
 * of simple values, or complex nested lists. Here are some examples of request
 * bodies:
 * CSV data with each row encoded as a string value:
 * <pre>
 * {"instances": ["1.0,true,\\"x\\"", "-2.0,false,\\"y\\""]}
 * </pre>
 * Plain text:
 * <pre>
 * {"instances": ["the quick brown fox", "la bruja le dio"]}
 * </pre>
 * Sentences encoded as lists of words (vectors of strings):
 * <pre>
 * {
 *   "instances": [
 *     ["the","quick","brown"],
 *     ["la","bruja","le"],
 *     ...
 *   ]
 * }
 * </pre>
 * Floating point scalar values:
 * <pre>
 * {"instances": [0.0, 1.1, 2.2]}
 * </pre>
 * Vectors of integers:
 * <pre>
 * {
 *   "instances": [
 *     [0, 1, 2],
 *     [3, 4, 5],
 *     ...
 *   ]
 * }
 * </pre>
 * Tensors (in this case, two-dimensional tensors):
 * <pre>
 * {
 *   "instances": [
 *     [
 *       [0, 1, 2],
 *       [3, 4, 5]
 *     ],
 *     ...
 *   ]
 * }
 * </pre>
 * Images can be represented different ways. In this encoding scheme the first
 * two dimensions represent the rows and columns of the image, and the third
 * contains lists (vectors) of the R, G, and B values for each pixel.
 * <pre>
 * {
 *   "instances": [
 *     [
 *       [
 *         [138, 30, 66],
 *         [130, 20, 56],
 *         ...
 *       ],
 *       [
 *         [126, 38, 61],
 *         [122, 24, 57],
 *         ...
 *       ],
 *       ...
 *     ],
 *     ...
 *   ]
 * }
 * </pre>
 * JSON strings must be encoded as UTF-8. To send binary data, you must
 * base64-encode the data and mark it as binary. To mark a JSON string
 * as binary, replace it with a JSON object with a single attribute named `b64`:
 * <pre>{"b64": "..."} </pre>
 * For example:
 * Two Serialized tf.Examples (fake data, for illustrative purposes only):
 * <pre>
 * {"instances": [{"b64": "X5ad6u"}, {"b64": "IA9j4nx"}]}
 * </pre>
 * Two JPEG image byte strings (fake data, for illustrative purposes only):
 * <pre>
 * {"instances": [{"b64": "ASa8asdf"}, {"b64": "JLK7ljk3"}]}
 * </pre>
 * If your data includes named references, format each instance as a JSON object
 * with the named references as the keys:
 * JSON input data to be preprocessed:
 * <pre>
 * {
 *   "instances": [
 *     {
 *       "a": 1.0,
 *       "b": true,
 *       "c": "x"
 *     },
 *     {
 *       "a": -2.0,
 *       "b": false,
 *       "c": "y"
 *     }
 *   ]
 * }
 * </pre>
 * Some models have an underlying TensorFlow graph that accepts multiple input
 * tensors. In this case, you should use the names of JSON name/value pairs to
 * identify the input tensors, as shown in the following exmaples:
 * For a graph with input tensor aliases "tag" (string) and "image"
 * (base64-encoded string):
 * <pre>
 * {
 *   "instances": [
 *     {
 *       "tag": "beach",
 *       "image": {"b64": "ASa8asdf"}
 *     },
 *     {
 *       "tag": "car",
 *       "image": {"b64": "JLK7ljk3"}
 *     }
 *   ]
 * }
 * </pre>
 * For a graph with input tensor aliases "tag" (string) and "image"
 * (3-dimensional array of 8-bit ints):
 * <pre>
 * {
 *   "instances": [
 *     {
 *       "tag": "beach",
 *       "image": [
 *         [
 *           [138, 30, 66],
 *           [130, 20, 56],
 *           ...
 *         ],
 *         [
 *           [126, 38, 61],
 *           [122, 24, 57],
 *           ...
 *         ],
 *         ...
 *       ]
 *     },
 *     {
 *       "tag": "car",
 *       "image": [
 *         [
 *           [255, 0, 102],
 *           [255, 0, 97],
 *           ...
 *         ],
 *         [
 *           [254, 1, 101],
 *           [254, 2, 93],
 *           ...
 *         ],
 *         ...
 *       ]
 *     },
 *     ...
 *   ]
 * }
 * </pre>
 * If the call is successful, the response body will contain one prediction
 * entry per instance in the request body. If prediction fails for any
 * instance, the response body will contain no predictions and will contian
 * a single error entry instead.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.PredictRequest</code>
 */
class PredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of a model or a version.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The prediction request body.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     */
    private $http_body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of a model or a version.
     *           Authorization: requires `Viewer` role on the parent project.
     *     @type \Google\Api\HttpBody $http_body
     *           Required. The prediction request body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of a model or a version.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of a model or a version.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The prediction request body.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     * @return \Google\Api\HttpBody
     */
    public function getHttpBody()
    {
        return $this->http_body;
    }

    /**
     * Required. The prediction request body.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     * @param \Google\Api\HttpBody $var
     * @return $this
     */
    public function setHttpBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\HttpBody::class);
        $this->http_body = $var;

        return $this;
    }

}

