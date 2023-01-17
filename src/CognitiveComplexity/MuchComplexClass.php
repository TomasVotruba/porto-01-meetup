<?php

declare(strict_types=1);

namespace PortoMeetup\CognitiveComplexity;

final class MuchComplexClass
{
    public function resolveFuture(int $year): string
    {
        if ($year > 2023) {
            if ($year > 2030) {
                if ($year > 2040) {
                    return 'GPT-372 will be released by itself';
                }

                return 'GPT-23 will be released by OpenAI';
            }

            return 'future is now';
        }

        return 'past is gone, live for the future';
    }
}
