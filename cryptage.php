<?php
function getAlphabet(): string
{
    return "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
}

function sizeAlphabet(): int
{
    $alphabet = getAlphabet();
    $alphabetTab = str_split($alphabet);
    $sizeAlphabet = count($alphabetTab);
    return $sizeAlphabet;
}

function createVigenere(): array
{
    // create a vigenere tab
    $alphabet = getAlphabet();
    $alphabetTab = str_split($alphabet);
    $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);

    $sizeAlphabet = count($alphabetTab);

    for ($i = 0; $i < $sizeAlphabet; $i++) {
        for ($j = 0; $j < $sizeAlphabet; $j++) {
            $line = $alphabetTab[$i];
            $column = $alphabetTab[$j];
            $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
        }
    }
    return $vigenere;
}

function encodeVigenere(string $text, string $key): string
{
    $vigenere = createVigenere();
    // encode message
    $messageTab = str_split($text);
    $keyTab = str_split($key);
    $keySize = count($keyTab);

    $keyCounter = 0;
    foreach ($messageTab as $letterToEncode) {
        $positionKeyLetter = $keyCounter % $keySize;
        $keyLetter = $keyTab[$positionKeyLetter];
        if ($letterToEncode != " ") {
            $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
        } else {
            $encodedMessage[] = " ";
        }
        $keyCounter++;
    }

    return implode($encodedMessage);
}

function decodeVigenere(string $text, string $key): string
{
    $vigenere = createVigenere();
    $sizeAlphabet = sizeAlphabet();
    $alphabetTab = str_split(getAlphabet());
    // decode message
    $encodedMessageTab = str_split($text);
    $key4decodeTab = str_split($key);
    $key4decodeSize = count($key4decodeTab);

    $keyCounter = 0;
    foreach ($encodedMessageTab as $letterToDecode) {
        $positionKeyLetter = $keyCounter % $key4decodeSize;
        $keyLetter = $key4decodeTab[$positionKeyLetter];
        if ($letterToDecode != " ") {
            for ($i = 0; $i < $sizeAlphabet; $i++) {
                $lineToDecode = $alphabetTab[$i];
                if ($vigenere[$lineToDecode][$keyLetter] == $letterToDecode) {
                    $decryptedMessage[] = $lineToDecode;
                }
            }
        } else {
            $decryptedMessage[] = " ";
        }
        $keyCounter++;
    }

    return implode($decryptedMessage);
}
