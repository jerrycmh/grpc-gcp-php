<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace GPBMetadata\Google\Api\Expr\V1Alpha1;

class Checked
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Syntax::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad0140a26676f6f676c652f6170692f657870722f7631616c706861312f" .
            "636865636b65642e70726f746f1218676f6f676c652e6170692e65787072" .
            "2e7631616c706861311a1b676f6f676c652f70726f746f6275662f656d70" .
            "74792e70726f746f1a1c676f6f676c652f70726f746f6275662f73747275" .
            "63742e70726f746f22b6030a0b436865636b656445787072124e0a0d7265" .
            "666572656e63655f6d617018022003280b32372e676f6f676c652e617069" .
            "2e657870722e7631616c706861312e436865636b6564457870722e526566" .
            "6572656e63654d6170456e74727912440a08747970655f6d617018032003" .
            "280b32322e676f6f676c652e6170692e657870722e7631616c706861312e" .
            "436865636b6564457870722e547970654d6170456e74727912390a0b736f" .
            "757263655f696e666f18052001280b32242e676f6f676c652e6170692e65" .
            "7870722e7631616c706861312e536f75726365496e666f122c0a04657870" .
            "7218042001280b321e2e676f6f676c652e6170692e657870722e7631616c" .
            "706861312e457870721a580a115265666572656e63654d6170456e747279" .
            "120b0a036b657918012001280312320a0576616c756518022001280b3223" .
            "2e676f6f676c652e6170692e657870722e7631616c706861312e52656665" .
            "72656e63653a0238011a4e0a0c547970654d6170456e747279120b0a036b" .
            "6579180120012803122d0a0576616c756518022001280b321e2e676f6f67" .
            "6c652e6170692e657870722e7631616c706861312e547970653a02380122" .
            "820a0a045479706512250a0364796e18012001280b32162e676f6f676c65" .
            "2e70726f746f6275662e456d7074794800122a0a046e756c6c1802200128" .
            "0e321a2e676f6f676c652e70726f746f6275662e4e756c6c56616c756548" .
            "0012410a097072696d697469766518032001280e322c2e676f6f676c652e" .
            "6170692e657870722e7631616c706861312e547970652e5072696d697469" .
            "7665547970654800123f0a077772617070657218042001280e322c2e676f" .
            "6f676c652e6170692e657870722e7631616c706861312e547970652e5072" .
            "696d697469766554797065480012420a0a77656c6c5f6b6e6f776e180520" .
            "01280e322c2e676f6f676c652e6170692e657870722e7631616c70686131" .
            "2e547970652e57656c6c4b6e6f776e547970654800123c0a096c6973745f" .
            "7479706518062001280b32272e676f6f676c652e6170692e657870722e76" .
            "31616c706861312e547970652e4c697374547970654800123a0a086d6170" .
            "5f7479706518072001280b32262e676f6f676c652e6170692e657870722e" .
            "7631616c706861312e547970652e4d6170547970654800123f0a0866756e" .
            "6374696f6e18082001280b322b2e676f6f676c652e6170692e657870722e" .
            "7631616c706861312e547970652e46756e6374696f6e5479706548001216" .
            "0a0c6d6573736167655f74797065180920012809480012140a0a74797065" .
            "5f706172616d180a200128094800122e0a0474797065180b2001280b321e" .
            "2e676f6f676c652e6170692e657870722e7631616c706861312e54797065" .
            "480012270a056572726f72180c2001280b32162e676f6f676c652e70726f" .
            "746f6275662e456d707479480012440a0d61627374726163745f74797065" .
            "180e2001280b322b2e676f6f676c652e6170692e657870722e7631616c70" .
            "6861312e547970652e41627374726163745479706548001a3d0a084c6973" .
            "745479706512310a09656c656d5f7479706518012001280b321e2e676f6f" .
            "676c652e6170692e657870722e7631616c706861312e547970651a6f0a07" .
            "4d61705479706512300a086b65795f7479706518012001280b321e2e676f" .
            "6f676c652e6170692e657870722e7631616c706861312e5479706512320a" .
            "0a76616c75655f7479706518022001280b321e2e676f6f676c652e617069" .
            "2e657870722e7631616c706861312e547970651a760a0c46756e6374696f" .
            "6e5479706512330a0b726573756c745f7479706518012001280b321e2e67" .
            "6f6f676c652e6170692e657870722e7631616c706861312e547970651231" .
            "0a096172675f747970657318022003280b321e2e676f6f676c652e617069" .
            "2e657870722e7631616c706861312e547970651a550a0c41627374726163" .
            "7454797065120c0a046e616d6518012001280912370a0f706172616d6574" .
            "65725f747970657318022003280b321e2e676f6f676c652e6170692e6578" .
            "70722e7631616c706861312e5479706522730a0d5072696d697469766554" .
            "797065121e0a1a5052494d49544956455f545950455f554e535045434946" .
            "494544100012080a04424f4f4c100112090a05494e5436341002120a0a06" .
            "55494e5436341003120a0a06444f55424c451004120a0a06535452494e47" .
            "100512090a054259544553100622560a0d57656c6c4b6e6f776e54797065" .
            "121f0a1b57454c4c5f4b4e4f574e5f545950455f554e5350454349464945" .
            "44100012070a03414e591001120d0a0954494d455354414d501002120c0a" .
            "084455524154494f4e1003420b0a09747970655f6b696e6422b9040a0444" .
            "65636c120c0a046e616d6518012001280912390a056964656e7418022001" .
            "280b32282e676f6f676c652e6170692e657870722e7631616c706861312e" .
            "4465636c2e4964656e744465636c4800123f0a0866756e6374696f6e1803" .
            "2001280b322b2e676f6f676c652e6170692e657870722e7631616c706861" .
            "312e4465636c2e46756e6374696f6e4465636c48001a790a094964656e74" .
            "4465636c122c0a047479706518012001280b321e2e676f6f676c652e6170" .
            "692e657870722e7631616c706861312e5479706512310a0576616c756518" .
            "022001280b32222e676f6f676c652e6170692e657870722e7631616c7068" .
            "61312e436f6e7374616e74120b0a03646f631803200128091a9e020a0c46" .
            "756e6374696f6e4465636c12470a096f7665726c6f61647318012003280b" .
            "32342e676f6f676c652e6170692e657870722e7631616c706861312e4465" .
            "636c2e46756e6374696f6e4465636c2e4f7665726c6f61641ac4010a084f" .
            "7665726c6f616412130a0b6f7665726c6f61645f6964180120012809122e" .
            "0a06706172616d7318022003280b321e2e676f6f676c652e6170692e6578" .
            "70722e7631616c706861312e5479706512130a0b747970655f706172616d" .
            "7318032003280912330a0b726573756c745f7479706518042001280b321e" .
            "2e676f6f676c652e6170692e657870722e7631616c706861312e54797065" .
            "121c0a1469735f696e7374616e63655f66756e6374696f6e180520012808" .
            "120b0a03646f63180620012809420b0a096465636c5f6b696e6422610a09" .
            "5265666572656e6365120c0a046e616d6518012001280912130a0b6f7665" .
            "726c6f61645f696418032003280912310a0576616c756518042001280b32" .
            "222e676f6f676c652e6170692e657870722e7631616c706861312e436f6e" .
            "7374616e74426c0a1c636f6d2e676f6f676c652e6170692e657870722e76" .
            "31616c7068613142094465636c50726f746f50015a3c676f6f676c652e67" .
            "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
            "6170692f657870722f7631616c706861313b65787072f80101620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

