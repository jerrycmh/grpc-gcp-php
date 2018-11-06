<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1beta1/attestation/attestation.proto

namespace Grafeas\V1beta1\Attestation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An attestation wrapper with a PGP-compatible signature. This message only
 * supports `ATTACHED` signatures, where the payload that is signed is included
 * alongside the signature itself in the same file.
 *
 * Generated from protobuf message <code>grafeas.v1beta1.attestation.PgpSignedAttestation</code>
 */
class PgpSignedAttestation extends \Google\Protobuf\Internal\Message
{
    /**
     * The raw content of the signature, as output by GNU Privacy Guard (GPG) or
     * equivalent.  Since this message only supports attached signatures, the
     * payload that was signed must be attached. While the signature format
     * supported is dependent on the verification implementation, currently only
     * ASCII-armored (`--armor` to gpg), non-clearsigned (`--sign` rather than
     * `--clearsign` to gpg) are supported. Concretely, `gpg --sign --armor
     * --output=signature.gpg payload.json` will create the signature content
     * expected in this field in `signature.gpg` for the `payload.json`
     * attestation payload.
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     */
    private $signature = '';
    /**
     * Type (for example schema) of the attestation payload that was signed.
     * The verifier must ensure that the provided type is one that the verifier
     * supports, and that the attestation payload is a valid instantiation of that
     * type (for example by validating a JSON schema).
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.attestation.PgpSignedAttestation.ContentType content_type = 3;</code>
     */
    private $content_type = 0;
    protected $key_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signature
     *           The raw content of the signature, as output by GNU Privacy Guard (GPG) or
     *           equivalent.  Since this message only supports attached signatures, the
     *           payload that was signed must be attached. While the signature format
     *           supported is dependent on the verification implementation, currently only
     *           ASCII-armored (`--armor` to gpg), non-clearsigned (`--sign` rather than
     *           `--clearsign` to gpg) are supported. Concretely, `gpg --sign --armor
     *           --output=signature.gpg payload.json` will create the signature content
     *           expected in this field in `signature.gpg` for the `payload.json`
     *           attestation payload.
     *     @type int $content_type
     *           Type (for example schema) of the attestation payload that was signed.
     *           The verifier must ensure that the provided type is one that the verifier
     *           supports, and that the attestation payload is a valid instantiation of that
     *           type (for example by validating a JSON schema).
     *     @type string $pgp_key_id
     *           The cryptographic fingerprint of the key used to generate the signature,
     *           as output by, e.g. `gpg --list-keys`. This should be the version 4, full
     *           160-bit fingerprint, expressed as a 40 character hexidecimal string. See
     *           https://tools.ietf.org/html/rfc4880#section-12.2 for details.
     *           Implementations may choose to acknowledge "LONG", "SHORT", or other
     *           abbreviated key IDs, but only the full fingerprint is guaranteed to work.
     *           In gpg, the full fingerprint can be retrieved from the `fpr` field
     *           returned when calling --list-keys with --with-colons.  For example:
     *           ```
     *           gpg --with-colons --with-fingerprint --force-v4-certs \
     *               --list-keys attester&#64;example.com
     *           tru::1:1513631572:0:3:1:5
     *           pub:...<SNIP>...
     *           fpr:::::::::24FF6481B76AC91E66A00AC657A93A81EF3AE6FB:
     *           ```
     *           Above, the fingerprint is `24FF6481B76AC91E66A00AC657A93A81EF3AE6FB`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Beta1\Attestation\Attestation::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw content of the signature, as output by GNU Privacy Guard (GPG) or
     * equivalent.  Since this message only supports attached signatures, the
     * payload that was signed must be attached. While the signature format
     * supported is dependent on the verification implementation, currently only
     * ASCII-armored (`--armor` to gpg), non-clearsigned (`--sign` rather than
     * `--clearsign` to gpg) are supported. Concretely, `gpg --sign --armor
     * --output=signature.gpg payload.json` will create the signature content
     * expected in this field in `signature.gpg` for the `payload.json`
     * attestation payload.
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * The raw content of the signature, as output by GNU Privacy Guard (GPG) or
     * equivalent.  Since this message only supports attached signatures, the
     * payload that was signed must be attached. While the signature format
     * supported is dependent on the verification implementation, currently only
     * ASCII-armored (`--armor` to gpg), non-clearsigned (`--sign` rather than
     * `--clearsign` to gpg) are supported. Concretely, `gpg --sign --armor
     * --output=signature.gpg payload.json` will create the signature content
     * expected in this field in `signature.gpg` for the `payload.json`
     * attestation payload.
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Type (for example schema) of the attestation payload that was signed.
     * The verifier must ensure that the provided type is one that the verifier
     * supports, and that the attestation payload is a valid instantiation of that
     * type (for example by validating a JSON schema).
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.attestation.PgpSignedAttestation.ContentType content_type = 3;</code>
     * @return int
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Type (for example schema) of the attestation payload that was signed.
     * The verifier must ensure that the provided type is one that the verifier
     * supports, and that the attestation payload is a valid instantiation of that
     * type (for example by validating a JSON schema).
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.attestation.PgpSignedAttestation.ContentType content_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1beta1\Attestation\PgpSignedAttestation_ContentType::class);
        $this->content_type = $var;

        return $this;
    }

    /**
     * The cryptographic fingerprint of the key used to generate the signature,
     * as output by, e.g. `gpg --list-keys`. This should be the version 4, full
     * 160-bit fingerprint, expressed as a 40 character hexidecimal string. See
     * https://tools.ietf.org/html/rfc4880#section-12.2 for details.
     * Implementations may choose to acknowledge "LONG", "SHORT", or other
     * abbreviated key IDs, but only the full fingerprint is guaranteed to work.
     * In gpg, the full fingerprint can be retrieved from the `fpr` field
     * returned when calling --list-keys with --with-colons.  For example:
     * ```
     * gpg --with-colons --with-fingerprint --force-v4-certs \
     *     --list-keys attester&#64;example.com
     * tru::1:1513631572:0:3:1:5
     * pub:...<SNIP>...
     * fpr:::::::::24FF6481B76AC91E66A00AC657A93A81EF3AE6FB:
     * ```
     * Above, the fingerprint is `24FF6481B76AC91E66A00AC657A93A81EF3AE6FB`.
     *
     * Generated from protobuf field <code>string pgp_key_id = 2;</code>
     * @return string
     */
    public function getPgpKeyId()
    {
        return $this->readOneof(2);
    }

    /**
     * The cryptographic fingerprint of the key used to generate the signature,
     * as output by, e.g. `gpg --list-keys`. This should be the version 4, full
     * 160-bit fingerprint, expressed as a 40 character hexidecimal string. See
     * https://tools.ietf.org/html/rfc4880#section-12.2 for details.
     * Implementations may choose to acknowledge "LONG", "SHORT", or other
     * abbreviated key IDs, but only the full fingerprint is guaranteed to work.
     * In gpg, the full fingerprint can be retrieved from the `fpr` field
     * returned when calling --list-keys with --with-colons.  For example:
     * ```
     * gpg --with-colons --with-fingerprint --force-v4-certs \
     *     --list-keys attester&#64;example.com
     * tru::1:1513631572:0:3:1:5
     * pub:...<SNIP>...
     * fpr:::::::::24FF6481B76AC91E66A00AC657A93A81EF3AE6FB:
     * ```
     * Above, the fingerprint is `24FF6481B76AC91E66A00AC657A93A81EF3AE6FB`.
     *
     * Generated from protobuf field <code>string pgp_key_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPgpKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyId()
    {
        return $this->whichOneof("key_id");
    }

}

