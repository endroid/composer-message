<?php

declare(strict_types=1);

namespace Endroid\ComposerMessage;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\ScriptEvents;
use Override;

final class Renderer implements PluginInterface, EventSubscriberInterface
{
    private Composer $composer;
    private IOInterface $io;

    #[Override]
    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    #[Override]
    public function deactivate(Composer $composer, IOInterface $io): void {}

    #[Override]
    public function uninstall(Composer $composer, IOInterface $io): void {}

    #[Override]
    public static function getSubscribedEvents(): array
    {
        return [
            ScriptEvents::POST_INSTALL_CMD => ['install', 1],
            ScriptEvents::POST_UPDATE_CMD => ['install', 1],
        ];
    }

    public function install(): void
    {
        $extra = $this->composer->getPackage()->getExtra();

        /** @var array{message?: array<array{type: string, content: string}>}|null $endroid */
        $endroid = $extra['endroid'] ?? null;

        $messages = is_array($endroid) && is_array($endroid['message'] ?? null) ? $endroid['message'] : [];

        foreach ($messages as $message) {
            $this->io->write('<' . $message['type'] . '>' . $message['content'] . '</>');
        }
    }
}
