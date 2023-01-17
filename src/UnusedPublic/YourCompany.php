<?php

namespace PortoMeetup\UnusedPublic;

final class YourCompany
{
    public function hireForWork(
        ExternalConsultant $externalConsultant,
        bool $hasBudget
    ) {
        $expensiveAdvices = [];

        while ($hasBudget) {
            $expensiveAdvices[] = $externalConsultant->getAdvice();
        }

        return $expensiveAdvices;
    }
}
