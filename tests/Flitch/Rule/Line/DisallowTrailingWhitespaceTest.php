<?php
/**
 * Flitch
 *
 * @link      http://github.com/DASPRiD/Flitch For the canonical source repository
 * @copyright 2011-2012 Ben 'DASPRiD' Scholzen
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace FlitchTest\Rule\Line;

use Flitch\Test\RuleTestCase,
    Flitch\File\File,
    Flitch\Rule\Line\DisallowTrailingWhitespace;

class DisallowTrailingWhitespaceTest extends RuleTestCase
{
    public function testTrailingWhitespace()
    {
        $this->file = new File(
            'foo.php',
            "<?php \n\t\n// foo"
        );

        $rule = new DisallowTrailingWhitespace();
        $rule->check($this->file);

        $this->assertRuleViolations($this->file, array(
            array(
                'line'     => 1,
                'column'   => 0,
                'message'  => 'Line may not contain trailing whitespace',
                'source'   => 'Flitch\Line\DisallowTrailingWhitespace'
            ),
            array(
                'line'     => 2,
                'column'   => 0,
                'message'  => 'Line may not contain trailing whitespace',
                'source'   => 'Flitch\Line\DisallowTrailingWhitespace'
            ),
        ));
    }
}
