<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class ImageAnnotator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Color::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac33a0a2c676f6f676c652f636c6f75642f766973696f6e2f76312f696d" .
            "6167655f616e6e6f7461746f722e70726f746f1216676f6f676c652e636c" .
            "6f75642e766973696f6e2e76311a25676f6f676c652f636c6f75642f7669" .
            "73696f6e2f76312f67656f6d657472792e70726f746f1a2c676f6f676c65" .
            "2f636c6f75642f766973696f6e2f76312f746578745f616e6e6f74617469" .
            "6f6e2e70726f746f1a2a676f6f676c652f636c6f75642f766973696f6e2f" .
            "76312f7765625f646574656374696f6e2e70726f746f1a23676f6f676c65" .
            "2f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a" .
            "1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f" .
            "746f1a17676f6f676c652f7270632f7374617475732e70726f746f1a1767" .
            "6f6f676c652f747970652f636f6c6f722e70726f746f1a18676f6f676c65" .
            "2f747970652f6c61746c6e672e70726f746f22f3020a0746656174757265" .
            "12320a047479706518012001280e32242e676f6f676c652e636c6f75642e" .
            "766973696f6e2e76312e466561747572652e5479706512130a0b6d61785f" .
            "726573756c7473180220012805120d0a056d6f64656c180320012809228f" .
            "020a045479706512140a10545950455f554e535045434946494544100012" .
            "120a0e464143455f444554454354494f4e100112160a124c414e444d4152" .
            "4b5f444554454354494f4e100212120a0e4c4f474f5f444554454354494f" .
            "4e100312130a0f4c4142454c5f444554454354494f4e100412120a0e5445" .
            "58545f444554454354494f4e1005121b0a17444f43554d454e545f544558" .
            "545f444554454354494f4e100b12190a15534146455f5345415243485f44" .
            "4554454354494f4e100612140a10494d4147455f50524f50455254494553" .
            "1007120e0a0a43524f505f48494e5453100912110a0d5745425f44455445" .
            "4354494f4e100a12170a134f424a4543545f4c4f43414c495a4154494f4e" .
            "101322370a0b496d616765536f7572636512150a0d6763735f696d616765" .
            "5f75726918012001280912110a09696d6167655f75726918022001280922" .
            "4d0a05496d616765120f0a07636f6e74656e7418012001280c12330a0673" .
            "6f7572636518022001280b32232e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e496d616765536f7572636522c70d0a0e46616365416e6e" .
            "6f746174696f6e123b0a0d626f756e64696e675f706f6c7918012001280b" .
            "32242e676f6f676c652e636c6f75642e766973696f6e2e76312e426f756e" .
            "64696e67506f6c79123e0a1066645f626f756e64696e675f706f6c791802" .
            "2001280b32242e676f6f676c652e636c6f75642e766973696f6e2e76312e" .
            "426f756e64696e67506f6c7912420a096c616e646d61726b731803200328" .
            "0b322f2e676f6f676c652e636c6f75642e766973696f6e2e76312e466163" .
            "65416e6e6f746174696f6e2e4c616e646d61726b12120a0a726f6c6c5f61" .
            "6e676c6518042001280212110a0970616e5f616e676c6518052001280212" .
            "120a0a74696c745f616e676c65180620012802121c0a1464657465637469" .
            "6f6e5f636f6e666964656e6365180720012802121e0a166c616e646d6172" .
            "6b696e675f636f6e666964656e6365180820012802123a0a0e6a6f795f6c" .
            "696b656c69686f6f6418092001280e32222e676f6f676c652e636c6f7564" .
            "2e766973696f6e2e76312e4c696b656c69686f6f64123d0a11736f72726f" .
            "775f6c696b656c69686f6f64180a2001280e32222e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e4c696b656c69686f6f64123c0a10616e" .
            "6765725f6c696b656c69686f6f64180b2001280e32222e676f6f676c652e" .
            "636c6f75642e766973696f6e2e76312e4c696b656c69686f6f64123f0a13" .
            "73757270726973655f6c696b656c69686f6f64180c2001280e32222e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e4c696b656c69686f6f" .
            "6412440a18756e6465725f6578706f7365645f6c696b656c69686f6f6418" .
            "0d2001280e32222e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e4c696b656c69686f6f64123e0a12626c75727265645f6c696b656c6968" .
            "6f6f64180e2001280e32222e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e4c696b656c69686f6f64123f0a1368656164776561725f6c69" .
            "6b656c69686f6f64180f2001280e32222e676f6f676c652e636c6f75642e" .
            "766973696f6e2e76312e4c696b656c69686f6f641ab9070a084c616e646d" .
            "61726b12420a047479706518032001280e32342e676f6f676c652e636c6f" .
            "75642e766973696f6e2e76312e46616365416e6e6f746174696f6e2e4c61" .
            "6e646d61726b2e5479706512320a08706f736974696f6e18042001280b32" .
            "202e676f6f676c652e636c6f75642e766973696f6e2e76312e506f736974" .
            "696f6e22b4060a045479706512140a10554e4b4e4f574e5f4c414e444d41" .
            "524b1000120c0a084c4546545f4559451001120d0a0952494748545f4559" .
            "45100212180a144c4546545f4f465f4c4546545f45594542524f57100312" .
            "190a1552494748545f4f465f4c4546545f45594542524f57100412190a15" .
            "4c4546545f4f465f52494748545f45594542524f571005121a0a16524947" .
            "48545f4f465f52494748545f45594542524f57100612190a154d4944504f" .
            "494e545f4245545745454e5f455945531007120c0a084e4f53455f544950" .
            "1008120d0a0955505045525f4c49501009120d0a094c4f5745525f4c4950" .
            "100a120e0a0a4d4f5554485f4c454654100b120f0a0b4d4f5554485f5249" .
            "474854100c12100a0c4d4f5554485f43454e544552100d12150a114e4f53" .
            "455f424f54544f4d5f5249474854100e12140a104e4f53455f424f54544f" .
            "4d5f4c454654100f12160a124e4f53455f424f54544f4d5f43454e544552" .
            "101012190a154c4546545f4559455f544f505f424f554e44415259101112" .
            "190a154c4546545f4559455f52494748545f434f524e45521012121c0a18" .
            "4c4546545f4559455f424f54544f4d5f424f554e44415259101312180a14" .
            "4c4546545f4559455f4c4546545f434f524e45521014121a0a1652494748" .
            "545f4559455f544f505f424f554e444152591015121a0a1652494748545f" .
            "4559455f52494748545f434f524e45521016121d0a1952494748545f4559" .
            "455f424f54544f4d5f424f554e44415259101712190a1552494748545f45" .
            "59455f4c4546545f434f524e45521018121f0a1b4c4546545f4559454252" .
            "4f575f55505045525f4d4944504f494e54101912200a1c52494748545f45" .
            "594542524f575f55505045525f4d4944504f494e54101a12140a104c4546" .
            "545f4541525f54524147494f4e101b12150a1152494748545f4541525f54" .
            "524147494f4e101c12120a0e4c4546545f4559455f505550494c101d1213" .
            "0a0f52494748545f4559455f505550494c101e12150a11464f5245484541" .
            "445f474c4142454c4c41101f12110a0d4348494e5f474e415448494f4e10" .
            "2012140a104348494e5f4c4546545f474f4e494f4e102112150a11434849" .
            "4e5f52494748545f474f4e494f4e102222340a0c4c6f636174696f6e496e" .
            "666f12240a076c61745f6c6e6718012001280b32132e676f6f676c652e74" .
            "7970652e4c61744c6e67223d0a0850726f7065727479120c0a046e616d65" .
            "180120012809120d0a0576616c756518022001280912140a0c75696e7436" .
            "345f76616c756518032001280422a7020a10456e74697479416e6e6f7461" .
            "74696f6e120b0a036d6964180120012809120e0a066c6f63616c65180220" .
            "01280912130a0b6465736372697074696f6e180320012809120d0a057363" .
            "6f726518042001280212120a0a636f6e666964656e636518052001280212" .
            "120a0a746f706963616c697479180620012802123b0a0d626f756e64696e" .
            "675f706f6c7918072001280b32242e676f6f676c652e636c6f75642e7669" .
            "73696f6e2e76312e426f756e64696e67506f6c7912370a096c6f63617469" .
            "6f6e7318082003280b32242e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e4c6f636174696f6e496e666f12340a0a70726f706572746965" .
            "7318092003280b32202e676f6f676c652e636c6f75642e766973696f6e2e" .
            "76312e50726f70657274792299010a194c6f63616c697a65644f626a6563" .
            "74416e6e6f746174696f6e120b0a036d696418012001280912150a0d6c61" .
            "6e67756167655f636f6465180220012809120c0a046e616d651803200128" .
            "09120d0a0573636f7265180420012802123b0a0d626f756e64696e675f70" .
            "6f6c7918052001280b32242e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e426f756e64696e67506f6c792299020a145361666553656172" .
            "6368416e6e6f746174696f6e12310a056164756c7418012001280e32222e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e4c696b656c6968" .
            "6f6f6412310a0573706f6f6618022001280e32222e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e4c696b656c69686f6f6412330a076d65" .
            "646963616c18032001280e32222e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e4c696b656c69686f6f6412340a0876696f6c656e636518" .
            "042001280e32222e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e4c696b656c69686f6f6412300a047261637918092001280e32222e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e4c696b656c69686f6f" .
            "6422610a0b4c61744c6f6e675265637412280a0b6d696e5f6c61745f6c6e" .
            "6718012001280b32132e676f6f676c652e747970652e4c61744c6e671228" .
            "0a0b6d61785f6c61745f6c6e6718022001280b32132e676f6f676c652e74" .
            "7970652e4c61744c6e6722550a09436f6c6f72496e666f12210a05636f6c" .
            "6f7218012001280b32122e676f6f676c652e747970652e436f6c6f72120d" .
            "0a0573636f726518022001280212160a0e706978656c5f6672616374696f" .
            "6e180320012802224d0a18446f6d696e616e74436f6c6f7273416e6e6f74" .
            "6174696f6e12310a06636f6c6f727318012003280b32212e676f6f676c65" .
            "2e636c6f75642e766973696f6e2e76312e436f6c6f72496e666f225c0a0f" .
            "496d61676550726f7065727469657312490a0f646f6d696e616e745f636f" .
            "6c6f727318012001280b32302e676f6f676c652e636c6f75642e76697369" .
            "6f6e2e76312e446f6d696e616e74436f6c6f7273416e6e6f746174696f6e" .
            "22780a0843726f7048696e74123b0a0d626f756e64696e675f706f6c7918" .
            "012001280b32242e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e426f756e64696e67506f6c7912120a0a636f6e666964656e6365180220" .
            "012802121b0a13696d706f7274616e63655f6672616374696f6e18032001" .
            "2802224b0a1343726f7048696e7473416e6e6f746174696f6e12340a0a63" .
            "726f705f68696e747318012003280b32202e676f6f676c652e636c6f7564" .
            "2e766973696f6e2e76312e43726f7048696e7422280a0f43726f7048696e" .
            "7473506172616d7312150a0d6173706563745f726174696f731801200328" .
            "0222310a12576562446574656374696f6e506172616d73121b0a13696e63" .
            "6c7564655f67656f5f726573756c747318022001280822f0010a0c496d61" .
            "6765436f6e74657874123a0a0d6c61745f6c6f6e675f7265637418012001" .
            "280b32232e676f6f676c652e636c6f75642e766973696f6e2e76312e4c61" .
            "744c6f6e675265637412160a0e6c616e67756167655f68696e7473180220" .
            "03280912420a1163726f705f68696e74735f706172616d7318042001280b" .
            "32272e676f6f676c652e636c6f75642e766973696f6e2e76312e43726f70" .
            "48696e7473506172616d7312480a147765625f646574656374696f6e5f70" .
            "6172616d7318062001280b322a2e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e576562446574656374696f6e506172616d7322b4010a14" .
            "416e6e6f74617465496d61676552657175657374122c0a05696d61676518" .
            "012001280b321d2e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e496d61676512310a08666561747572657318022003280b321f2e676f6f" .
            "676c652e636c6f75642e766973696f6e2e76312e46656174757265123b0a" .
            "0d696d6167655f636f6e7465787418032001280b32242e676f6f676c652e" .
            "636c6f75642e766973696f6e2e76312e496d616765436f6e74657874223a" .
            "0a16496d616765416e6e6f746174696f6e436f6e74657874120b0a037572" .
            "6918012001280912130a0b706167655f6e756d6265721802200128052296" .
            "070a15416e6e6f74617465496d616765526573706f6e736512400a106661" .
            "63655f616e6e6f746174696f6e7318012003280b32262e676f6f676c652e" .
            "636c6f75642e766973696f6e2e76312e46616365416e6e6f746174696f6e" .
            "12460a146c616e646d61726b5f616e6e6f746174696f6e7318022003280b" .
            "32282e676f6f676c652e636c6f75642e766973696f6e2e76312e456e7469" .
            "7479416e6e6f746174696f6e12420a106c6f676f5f616e6e6f746174696f" .
            "6e7318032003280b32282e676f6f676c652e636c6f75642e766973696f6e" .
            "2e76312e456e74697479416e6e6f746174696f6e12430a116c6162656c5f" .
            "616e6e6f746174696f6e7318042003280b32282e676f6f676c652e636c6f" .
            "75642e766973696f6e2e76312e456e74697479416e6e6f746174696f6e12" .
            "570a1c6c6f63616c697a65645f6f626a6563745f616e6e6f746174696f6e" .
            "7318162003280b32312e676f6f676c652e636c6f75642e766973696f6e2e" .
            "76312e4c6f63616c697a65644f626a656374416e6e6f746174696f6e1242" .
            "0a10746578745f616e6e6f746174696f6e7318052003280b32282e676f6f" .
            "676c652e636c6f75642e766973696f6e2e76312e456e74697479416e6e6f" .
            "746174696f6e12440a1466756c6c5f746578745f616e6e6f746174696f6e" .
            "180c2001280b32262e676f6f676c652e636c6f75642e766973696f6e2e76" .
            "312e54657874416e6e6f746174696f6e124c0a16736166655f7365617263" .
            "685f616e6e6f746174696f6e18062001280b322c2e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e53616665536561726368416e6e6f7461" .
            "74696f6e124c0a1b696d6167655f70726f706572746965735f616e6e6f74" .
            "6174696f6e18082001280b32272e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e496d61676550726f70657274696573124a0a1563726f70" .
            "5f68696e74735f616e6e6f746174696f6e180b2001280b322b2e676f6f67" .
            "6c652e636c6f75642e766973696f6e2e76312e43726f7048696e7473416e" .
            "6e6f746174696f6e123b0a0d7765625f646574656374696f6e180d200128" .
            "0b32242e676f6f676c652e636c6f75642e766973696f6e2e76312e576562" .
            "446574656374696f6e12210a056572726f7218092001280b32122e676f6f" .
            "676c652e7270632e537461747573123f0a07636f6e746578741815200128" .
            "0b322e2e676f6f676c652e636c6f75642e766973696f6e2e76312e496d61" .
            "6765416e6e6f746174696f6e436f6e746578742293010a14416e6e6f7461" .
            "746546696c65526573706f6e736512390a0c696e7075745f636f6e666967" .
            "18012001280b32232e676f6f676c652e636c6f75642e766973696f6e2e76" .
            "312e496e707574436f6e66696712400a09726573706f6e73657318022003" .
            "280b322d2e676f6f676c652e636c6f75642e766973696f6e2e76312e416e" .
            "6e6f74617465496d616765526573706f6e7365225c0a1a4261746368416e" .
            "6e6f74617465496d6167657352657175657374123e0a0872657175657374" .
            "7318012003280b322c2e676f6f676c652e636c6f75642e766973696f6e2e" .
            "76312e416e6e6f74617465496d61676552657175657374225f0a1b426174" .
            "6368416e6e6f74617465496d61676573526573706f6e736512400a097265" .
            "73706f6e73657318012003280b322d2e676f6f676c652e636c6f75642e76" .
            "6973696f6e2e76312e416e6e6f74617465496d616765526573706f6e7365" .
            "2282020a184173796e63416e6e6f7461746546696c655265717565737412" .
            "390a0c696e7075745f636f6e66696718012001280b32232e676f6f676c65" .
            "2e636c6f75642e766973696f6e2e76312e496e707574436f6e6669671231" .
            "0a08666561747572657318022003280b321f2e676f6f676c652e636c6f75" .
            "642e766973696f6e2e76312e46656174757265123b0a0d696d6167655f63" .
            "6f6e7465787418032001280b32242e676f6f676c652e636c6f75642e7669" .
            "73696f6e2e76312e496d616765436f6e74657874123b0a0d6f7574707574" .
            "5f636f6e66696718042001280b32242e676f6f676c652e636c6f75642e76" .
            "6973696f6e2e76312e4f7574707574436f6e66696722580a194173796e63" .
            "416e6e6f7461746546696c65526573706f6e7365123b0a0d6f7574707574" .
            "5f636f6e66696718012001280b32242e676f6f676c652e636c6f75642e76" .
            "6973696f6e2e76312e4f7574707574436f6e66696722640a1e4173796e63" .
            "4261746368416e6e6f7461746546696c65735265717565737412420a0872" .
            "6571756573747318012003280b32302e676f6f676c652e636c6f75642e76" .
            "6973696f6e2e76312e4173796e63416e6e6f7461746546696c6552657175" .
            "65737422670a1f4173796e634261746368416e6e6f7461746546696c6573" .
            "526573706f6e736512440a09726573706f6e73657318012003280b32312e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e4173796e63416e" .
            "6e6f7461746546696c65526573706f6e736522570a0b496e707574436f6e" .
            "66696712350a0a6763735f736f7572636518012001280b32212e676f6f67" .
            "6c652e636c6f75642e766973696f6e2e76312e476373536f757263651211" .
            "0a096d696d655f7479706518022001280922630a0c4f7574707574436f6e" .
            "666967123f0a0f6763735f64657374696e6174696f6e18012001280b3226" .
            "2e676f6f676c652e636c6f75642e766973696f6e2e76312e476373446573" .
            "74696e6174696f6e12120a0a62617463685f73697a651802200128052218" .
            "0a09476373536f75726365120b0a03757269180120012809221d0a0e4763" .
            "7344657374696e6174696f6e120b0a037572691801200128092288020a11" .
            "4f7065726174696f6e4d65746164617461123e0a05737461746518012001" .
            "280e322f2e676f6f676c652e636c6f75642e766973696f6e2e76312e4f70" .
            "65726174696f6e4d657461646174612e5374617465122f0a0b6372656174" .
            "655f74696d6518052001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70122f0a0b7570646174655f74696d651806200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022" .
            "510a05537461746512150a1153544154455f554e53504543494649454410" .
            "00120b0a07435245415445441001120b0a0752554e4e494e47100212080a" .
            "04444f4e451003120d0a0943414e43454c4c454410042a650a0a4c696b65" .
            "6c69686f6f64120b0a07554e4b4e4f574e100012110a0d564552595f554e" .
            "4c494b454c591001120c0a08554e4c494b454c591002120c0a08504f5353" .
            "49424c451003120a0a064c494b454c591004120f0a0b564552595f4c494b" .
            "454c59100532cd020a0e496d616765416e6e6f7461746f72129e010a1342" .
            "61746368416e6e6f74617465496d6167657312322e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e4261746368416e6e6f74617465496d61" .
            "676573526571756573741a332e676f6f676c652e636c6f75642e76697369" .
            "6f6e2e76312e4261746368416e6e6f74617465496d61676573526573706f" .
            "6e7365221e82d3e493021822132f76312f696d616765733a616e6e6f7461" .
            "74653a012a1299010a174173796e634261746368416e6e6f746174654669" .
            "6c657312362e676f6f676c652e636c6f75642e766973696f6e2e76312e41" .
            "73796e634261746368416e6e6f7461746546696c6573526571756573741a" .
            "1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e" .
            "222782d3e4930221221c2f76312f66696c65733a6173796e634261746368" .
            "416e6e6f746174653a012a427b0a1a636f6d2e676f6f676c652e636c6f75" .
            "642e766973696f6e2e76314213496d616765416e6e6f7461746f7250726f" .
            "746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f636c6f75642f766973696f6e2f76313b" .
            "766973696f6ef80101a202044743564e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
