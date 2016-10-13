<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),

            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Puli\SymfonyBundle\PuliBundle(),
            new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),

            // phlexible.core
            new Phlexible\Bundle\GuiBundle\PhlexibleGuiBundle(),
            new Phlexible\Bundle\MessageBundle\PhlexibleMessageBundle(),
            new Phlexible\Bundle\QueueBundle\PhlexibleQueueBundle(),
            new Phlexible\Bundle\UserBundle\PhlexibleUserBundle(),
            new Phlexible\Bundle\ProblemBundle\PhlexibleProblemBundle(),
            new Phlexible\Bundle\DashboardBundle\PhlexibleDashboardBundle(),
            new Phlexible\Bundle\SearchBundle\PhlexibleSearchBundle(),
            new Phlexible\Bundle\AccessControlBundle\PhlexibleAccessControlBundle(),

            // phlexible.media
            new Phlexible\Bundle\MediaCacheBundle\PhlexibleMediaCacheBundle(),
            new Phlexible\Bundle\MediaExtractorBundle\PhlexibleMediaExtractorBundle(),
            new Phlexible\Bundle\MediaManagerBundle\PhlexibleMediaManagerBundle(),
            new Phlexible\Bundle\MediaTemplateBundle\PhlexibleMediaTemplateBundle(),
            new Phlexible\Bundle\MediaToolBundle\PhlexibleMediaToolBundle(),
            new Phlexible\Bundle\MediaTypeBundle\PhlexibleMediaTypeBundle(),
            new Phlexible\Bundle\MetaSetBundle\PhlexibleMetaSetBundle(),

            // phlexible.cms
            new Phlexible\Bundle\CmsBundle\PhlexibleCmsBundle(),
            new Phlexible\Bundle\SiterootBundle\PhlexibleSiterootBundle(),
            new Phlexible\Bundle\ElementtypeBundle\PhlexibleElementtypeBundle(),
            new Phlexible\Bundle\ElementBundle\PhlexibleElementBundle(),
            new Phlexible\Bundle\TeaserBundle\PhlexibleTeaserBundle(),
            new Phlexible\Bundle\TreeBundle\PhlexibleTreeBundle(),
            new Phlexible\Bundle\FrontendMediaBundle\PhlexibleFrontendMediaBundle(),
            new Phlexible\Bundle\ElementRendererBundle\PhlexibleElementRendererBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
