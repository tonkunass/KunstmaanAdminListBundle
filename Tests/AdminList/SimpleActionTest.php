<?php
namespace Kunstmaan\AdminListBundle\Tests\AdminList;

use Kunstmaan\AdminListBundle\AdminList\SimpleAction;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 13:21:34.
 */
class SimpleActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleAction
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SimpleAction('http://www.domain.com/action', 'icon.png', 'Label', 'template.html.twig');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\SimpleAction::getUrl
     */
    public function testGetUrl()
    {
        $this->assertEquals('http://www.domain.com/action', $this->object->getUrl());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\SimpleAction::getIcon
     */
    public function testGetIcon()
    {
        $this->assertEquals('icon.png', $this->object->getIcon());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\SimpleAction::getLabel
     */
    public function testGetLabel()
    {
        $this->assertEquals('Label', $this->object->getLabel());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\SimpleAction::getTemplate
     */
    public function testGetTemplate()
    {
        $this->assertEquals('template.html.twig', $this->object->getTemplate());
    }
}
