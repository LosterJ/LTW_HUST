<?php

$xml = new DOMDocument();
$xml->load('my-class.xml');

if (@ $xml->validate())
    print("Valid against the DTD\n");
else print("Not valid against the DTD\n");

if (@ $xml->schemaValidate('class.xsd'))
    print("Valid against the XML Schema\n");
else print("Not valid against the XML Schema\n");


$students = $xml->getElementsByTagName('student');
foreach ($students as $s) {
    $name = $s->getElementsByTagName('name')[0];
    echo $name->nodeValue . ': ' . $s->getAttribute('gender') . "\n";

    $child = $xml->createElement('test');
    $child->setAttribute('attr1', 'value1');
    $s->appendChild($child);
}

// XPath
print("XPath:\n");
$query = new DOMXPath($xml);
$res = $query->query('//student[@gender="female"]/birthday');
foreach ($res as $n) {
    echo $n->nodeValue . "\n";
}

$xml->save('my-class1.xml');

?>