<?php

/**
 * @file
 * Contains \EclipseGc\Plugin\Discovery\StaticPluginDiscoveryInterface.
 */

namespace EclipseGc\Plugin\Discovery;

use EclipseGc\Plugin\PluginDefinitionInterface;

interface StaticPluginDictionaryInterface {

  /**
   * Adds a plugin to the iterator.
   *
   * Adding to the keyed definitions is useful when a discovery iterator is
   * ONLY being used in a static fashion. This will allow the unkeyed
   * definitions and the keyed definitions to be in the same order and will not
   * require unpacking of every definition during a getDefinitions() call.
   *
   * @param \EclipseGc\Plugin\PluginDefinitionInterface $definition
   *   The definition to add to the iterator.
   *
   * @return $this
   */
  public function addPluginDefinition(PluginDefinitionInterface $definition) : StaticPluginDictionaryInterface ;

}
