<?php

namespace Iotronlab\TiptapSpatieMedia\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TiptapSpatieMediaCommand extends Command
{
    protected $signature = 'tiptap-spatie-media:install';
    protected $description = 'Integrates Spatie Media support into Filament Tiptap Editor configuration.';

    public function handle(): int
    {
        $configFilePath = config_path('filament-tiptap-editor.php');

        // Step 1: Ensure the config file exists
        if (!File::exists($configFilePath)) {
            $this->info('Filament Tiptap Editor config not found. Publishing...');
            $this->callSilent('vendor:publish', [
                '--tag' => 'filament-tiptap-editor-config',
            ]);

            if (!File::exists($configFilePath)) {
                $this->error('Failed to publish the config file.');
                return self::FAILURE;
            }

            $this->info('Config file published.');
        }

        // Step 2: Inject media_action override
        $this->inject($configFilePath);
        $this->info('Tiptap Spatie MediaAction has been injected into the config file.');
        $this->comment('Setup complete.');

        return self::SUCCESS;
    }

    protected function inject(string $path): void
    {
        $config = File::get($path);

        $pattern = "/'media_action'\s*=>\s*[^,]+,/";
        $replacement = "'media_action' => \\\\Iotronlab\\\\TiptapSpatieMedia\\\\TiptapSpatieMediaAction::class,";

        // If already injected, skip
        if (preg_match("/Iotronlab\\\\TiptapSpatieMedia\\\\TiptapSpatieMediaAction::class/", $config)) {
            $this->line('Media action already set to TiptapSpatieMediaAction. Skipping injection.');
            return;
        }

        $updatedConfig = preg_replace($pattern, $replacement, $config);

        if ($updatedConfig === null) {
            $this->error('Failed to update the config file. Check regex pattern.');
            return;
        }

        File::put($path, $updatedConfig);
    }
}
