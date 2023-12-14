<?php

namespace Drupal\my_assessment\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\StringFormatter\StringFormatter;


class MyAssessmentController extends ControllerBase {
    
    // /**
    //  * {@inheritdoc}
    //  */
    // public static function create(ContainerInterface $container) {
    //     return new static(
    //     $container->get('my_assessment.string_formatter')
    //     );
    // }
    /**
     * @return Response
     */
    public function content() {
        $stringFormatter = \Drupal::service('my_assessment.string_formatter');
        $sum = $stringFormatter->getString();
        return new Response($sum);
    }
}