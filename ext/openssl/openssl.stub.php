<?php

/** @generate-function-entries */

final class OpenSSLCertificate
{
}

final class OpenSSLCertificateSigningRequest
{
}

final class OpenSSLAsymmetricKey
{
}

function openssl_x509_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true): bool {}

/** @param string $output */
function openssl_x509_export(OpenSSLCertificate|string $certificate, &$output, bool $no_text = true): bool {}

function openssl_x509_fingerprint(OpenSSLCertificate|string $certificate, string $digest_algorithm = "sha1", bool $raw_output = false): string|false {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_x509_check_private_key(OpenSSLCertificate|string $certificate, $private_key): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_x509_verify(OpenSSLCertificate|string $certificate, $public_key): int {}

function openssl_x509_parse(OpenSSLCertificate|string $certificate, bool $short_names = true): array|false {}

function openssl_x509_checkpurpose(OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = null): bool|int {}

function openssl_x509_read(OpenSSLCertificate|string $certificate): OpenSSLCertificate|false {}

/** @deprecated */
function openssl_x509_free(OpenSSLCertificate $certificate): void {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_pkcs12_export_to_file(OpenSSLCertificate|string $certificate, string $filename, $private_key, string $passphrase, array $options = []): bool {}

/**
 * @param string $output
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkcs12_export(OpenSSLCertificate|string $certificate, &$output, $private_key, string $passphrase, array $options = []): bool {}

/** @param array $certificates */
function openssl_pkcs12_read(string $pkcs12, &$certificates, string $passphrase): bool {}

function openssl_csr_export_to_file(OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true): bool {}

/** @param OpenSSLAsymmetricKey $output */
function openssl_csr_export(OpenSSLCertificateSigningRequest|string $csr, &$output, bool $no_text = true): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_csr_sign(OpenSSLCertificateSigningRequest|string $csr, OpenSSLCertificate|string|null $ca_certificate, $private_key, int $days, ?array $options = null, int $serial = 0): OpenSSLCertificate|false {}

/** @param OpenSSLAsymmetricKey $private_key */
function openssl_csr_new(array $distinguished_names, &$private_key, ?array $options = null, ?array $extra_options = null): OpenSSLCertificateSigningRequest|false {}

function openssl_csr_get_subject(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): array|false {}

function openssl_csr_get_public_key(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): OpenSSLAsymmetricKey|false {}

function openssl_pkey_new(?array $options = null): OpenSSLAsymmetricKey|false {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key */
function openssl_pkey_export_to_file($key, string $output_filename, ?string $passphrase = null, ?array $options = null): bool {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key
 * @param string $output
 */
function openssl_pkey_export($key, &$output, ?string $passphrase = null, ?array $options = null): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_pkey_get_public($public_key): OpenSSLAsymmetricKey|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 * @alias openssl_pkey_get_public
 */
function openssl_get_publickey($public_key): OpenSSLAsymmetricKey|false {}

/** @deprecated */
function openssl_pkey_free(OpenSSLAsymmetricKey $key): void {}

/**
 * @alias openssl_pkey_free
 * @deprecated
 */
function openssl_free_key(OpenSSLAsymmetricKey $key): void {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_pkey_get_private($private_key, ?string $passphrase = null): OpenSSLAsymmetricKey|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 * @alias openssl_pkey_get_private
 */
function openssl_get_privatekey($private_key, ?string $passphrase = null): OpenSSLAsymmetricKey|false {}

function openssl_pkey_get_details(OpenSSLAsymmetricKey $key): array|false {}

function openssl_pbkdf2(string $passphrase, string $salt, int $key_length, int $iterations, string $digest_algorithm = "sha1"): string|false {}

function openssl_pkcs7_verify(string $filename, int $flags, ?string $output_filename = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $pk7_filename = null): bool|int {}

/** @param OpenSSLCertificate|array|string $certificate */
function openssl_pkcs7_encrypt(string $filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $cipher_algorithm = OPENSSL_CIPHER_RC2_40): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_pkcs7_sign(string $filename, string $output_filename, OpenSSLCertificate|string $certificate, $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = null): bool {}

/**
 * @param OpenSSLCertificate|string $certificate
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key
 */
function openssl_pkcs7_decrypt(string $filename, string $output_filename, $certificate, $private_key = null): bool {}

/** @param array $certificates */
function openssl_pkcs7_read(string $filename, &$certificates): bool {}

function openssl_cms_verify(string $filename, int $flags = 0, ?string $certificates = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $pk7 = null, ?string $sigfile = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/** @param OpenSSLCertificate|array|string $certificate */
function openssl_cms_encrypt(string $filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME,  int $cipher_algorithm = OPENSSL_CIPHER_RC2_40): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key */
function openssl_cms_sign(string $filename, string $output_filename, OpenSSLCertificate|string $certificate, $private_key, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = null): bool {}

/**
 * @param OpenSSLCertificate|string $certificate
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key
 */
function openssl_cms_decrypt(string $filename, string $output_filename, $certificate, $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/** @param array $certificates */
function openssl_cms_read(string $filename, &$certificates): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_private_encrypt(string $data, &$encrypted_data, $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_private_decrypt(string $data, &$encrypted_data, $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
function openssl_public_encrypt(string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
function openssl_public_decrypt(string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

function openssl_error_string(): string|false {}

/**
 * @param string $signature
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_sign(string $data, &$signature, $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_verify(string $data, string $signature, $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1): int|false {}

/**
 * @param string $sealed_data
 * @param array $encrypted_keys
 * @param string $initialization_vector
 */
function openssl_seal(string $data, &$sealed_data, &$encrypted_keys, array $public_key, string $cipher_algorithm, &$initialization_vector = null): int|false {}

/**
 * @param string $output
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_open(string $data, &$output, string $encrypted_key, $private_key, string $cipher_algorithm, ?string $initialization_vector = null): bool {}

function openssl_get_md_methods(bool $aliases = false): array {}

function openssl_get_cipher_methods(bool $aliases = false): array {}

#ifdef HAVE_EVP_PKEY_EC
function openssl_get_curve_names(): array|false {}
#endif

function openssl_digest(string $data, string $digest_algorithm, bool $raw_output = false): string|false {}

/** @param string $tag */
function openssl_encrypt(string $data, string $cipher_algorithm, string $passphrase, int $options = 0, string $initialization_vector = "", &$tag = null, string $additional_authentication_data = "", int $tag_length = 16): string|false {}

function openssl_decrypt(string $data, string $cipher_algorithm, string $passphrase, int $options = 0, string $initialization_vector = "", string $tag = "", string $additional_authentication_data = ""): string|false {}

function openssl_cipher_iv_length(string $cipher_algorithm): int|false {}

function openssl_dh_compute_key(string $public_key, OpenSSLAsymmetricKey $private_key): string|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkey_derive($public_key, $private_key, int $key_length = 0): string|false {}

/** @param bool $strong_result */
function openssl_random_pseudo_bytes(int $length, &$strong_result = null): string {}

function openssl_spki_new(OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algorithm = OPENSSL_ALGO_MD5): string|false {}

function openssl_spki_verify(string $spki): bool {}

function openssl_spki_export(string $spki): string|false {}

function openssl_spki_export_challenge(string $spki): string|false {}

function openssl_get_cert_locations(): array {}
