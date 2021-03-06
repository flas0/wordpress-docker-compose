<?php
namespace MailPoetVendor\Twig\Profiler\Dumper;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Profiler\Profile;
final class TextDumper extends BaseDumper
{
 protected function formatTemplate(Profile $profile, $prefix)
 {
 return \sprintf('%s└ %s', $prefix, $profile->getTemplate());
 }
 protected function formatNonTemplate(Profile $profile, $prefix)
 {
 return \sprintf('%s└ %s::%s(%s)', $prefix, $profile->getTemplate(), $profile->getType(), $profile->getName());
 }
 protected function formatTime(Profile $profile, $percent)
 {
 return \sprintf('%.2fms/%.0f%%', $profile->getDuration() * 1000, $percent);
 }
}
\class_alias('MailPoetVendor\\Twig\\Profiler\\Dumper\\TextDumper', 'MailPoetVendor\\Twig_Profiler_Dumper_Text');
