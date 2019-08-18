<?php

use Cms\Classes\Page;
use Cms\Classes\Theme;
use Cms\Classes\Layout;
use Cms\Classes\Router;
use Cms\Classes\CodeParser;
use Cms\Classes\Controller;
use Cms\Classes\CmsException;
use October\Rain\Exception\SystemException;

class CmsExceptionTest extends TestCase
{
    //
    // Tests
    //

    public function testExceptionMask()
    {
        $foreignException = new \Exception('This is a general error');
        $exceptionMask = new SystemException('This is a system exception');
        $exceptionMask->setMask($foreignException);

        $this->assertEquals('This is a general error', $exceptionMask->getMessage());
    }

    public function testCmsExceptionPhp()
    {
        $theme = Theme::load('test');
        $router = new Router($theme);
        $page = $router->findByUrl('/throw-php');

        $foreignException = new \Symfony\Component\Debug\Exception\FatalErrorException('This is a general error', 100, 1, 'test.php', 20);
        $this->setProtectedProperty($foreignException, 'file', "/modules/cms/classes/CodeParser.php(165) : eval()'d code line 7");

        $exception = new CmsException($page, 300);
        $exception->setMask($foreignException);

        $this->assertEquals($page->getFilePath(), $exception->getFile());
        $this->assertEquals('PHP Content', $exception->getErrorType());
        $this->assertEquals('This is a general error', $exception->getMessage());
    }
}
