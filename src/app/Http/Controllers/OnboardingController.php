<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function step(Request $request)
    {
        $steps = $this->getSteps();
        $step = $request->step;

        if (!isset($steps[$step])) {
            return response()->json(['error' => 'Step not found.']);
        }else {
            return response()->json($steps[$step]);
        }
    }

    public function getSteps()
    {
        $steps = [
            1 => [
                'title' => 'Welcome to the app!',
                'description' => 'This is the first step of the onboarding process.',
                'next' => 'Next step',
                'skip' => 'Skip onboarding',
            ],
            2 => [
                'title' => 'This is the second step',
                'description' => 'This is the second step of the onboarding process.',
                'next' => 'Next step',
                'skip' => 'Skip onboarding',
            ],
            3 => [
                'title' => 'This is the third step',
                'description' => 'This is the third step of the onboarding process.',
                'next' => 'Next step',
                'skip' => 'Skip onboarding',
            ],
        ];


        return $steps;
    }
}
