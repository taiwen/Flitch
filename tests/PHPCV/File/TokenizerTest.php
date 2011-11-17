<?php
/**
 * PHPCV
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @category   PHPCV
 * @package    PHPCV_File
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

namespace PHPCVTest\File;

use PHPUnit_Framework_TestCase as TestCase,
    PHPCV\File\Tokenizer;

/**
 * @category   PHPCV
 * @package    PHPCV_File
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class TokenizerTest extends TestCase
{
    public function testSimple()
    {
        $tokenizer = new Tokenizer();
        $tokenizer->tokenize(__FILE__);
    }
}