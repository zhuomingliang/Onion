<?php
class ConfigContainerTest extends PHPUnit_Framework_TestCase 
{
    function test()
    {
        $config = new \Onion\ConfigContainer(array( 
            'key' => array( 
                'subkey' => array( 'hash' => 1 ),
            )
        ));
        ok( $config );
        $val = $config->get('key.subkey.hash');
        is( 1, $val );

        $val = $config->{'key.subkey.hash'};
        is( 1, $val );

        $config->set('key.subkey2',3);
        is( 3, $config->get('key.subkey2') );

        $config->set('key.subkey.hash3',5);
        is( 5, $config->get('key.subkey.hash3') );
    }
}
