<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Models\CourseSubject;
use App\Models\CurriculumSubject;
use Illuminate\Http\Request;

class CourseSubjectController extends Controller
{
    public function getCourseSubject(CourseSubject $courseSubject)
    {
        $courseSubjects = $courseSubject->with('curriculum_subject', 'year_level', 'semester')
            // ->where('year_level_id', 4)
            // ->where('semester_id', 2)
            ->get();

        $getCourseSubjects = $courseSubjects->map(function ($courseSubject) {
            $preRequisites = explode(', ', $courseSubject->pre_requisite);

            // * GET THE DESCRIPTIONS FOR EACH PRE_REQUISITE ID * //
            $course_code = collect($preRequisites)->map(function ($id) {
                // * CHECK IF ID IS A VALID INTEGER BEFORE TRYING TO FIND THE CURRICULUM_SUBJECT * //
                if (!ctype_digit($id)) {
                    return null;
                }

                $curriculumSubject = CurriculumSubject::find($id);

                // * RETURN DESCRIPTION IF THE CURRICULUM_SUBJECT IS FOUND * //
                return $curriculumSubject ? $curriculumSubject->course_code : null;
            });

            return[
                'year' => $courseSubject->year_level->name,
                'semester' => $courseSubject->semester->name,
                'description' => $courseSubject->curriculum_subject->description,
                'course_code' => $courseSubject->curriculum_subject->course_code,
                'lecture' => $courseSubject->curriculum_subject->lec,
                'laboratory' => $courseSubject->curriculum_subject->lab,
                'units' => $courseSubject->curriculum_subject->units,
                'pre-requisite(s)' => $course_code->filter() // * FILTER OUT NULL VALUES * //
            ];
        });

        // return response()->json(['total_units' => $courseSubjects->sum('curriculum_subject.units')]);

        return response()->json($getCourseSubjects);
    }

    public function getCourseSubjectAPI(CourseSubject $courseSubject, ApiKey $apiKey)
    {
        $validApiKey = $apiKey->where('key', request()->header('X-API-Key'))->exists();

        if (empty(request()->header('X-API-Key'))) {
            return response()->json(['error' => "Unauthorized. API key is missing."], 403);
        }

        if (!$validApiKey) {
            return response()->json(['error' => "Unauthorized. Wrong API key."], 403);
        }

        $courseSubjects = $courseSubject->with('semester', 'section')->orderBy('lastname')->get();

        $getCourseSubjects = $courseSubjects->map(function ($courseSubject) {
            $preRequisites = explode(', ', $courseSubject->pre_requisite);

            // * GET THE DESCRIPTIONS FOR EACH PRE_REQUISITE ID * //
            $descriptions = collect($preRequisites)->map(function ($id) {
                // * CHECK IF ID IS A VALID INTEGER BEFORE TRYING TO FIND THE CURRICULUM_SUBJECT * //
                if (!ctype_digit($id)) {
                    return null;
                }

                $curriculumSubject = CurriculumSubject::find($id);

                // * RETURN DESCRIPTION IF THE CURRICULUM_SUBJECT IS FOUND * //
                return $curriculumSubject ? $curriculumSubject->course_code : null;
            });

            return[
                'year' => $courseSubject->year_level->name,
                'semester' => $courseSubject->semester->name,
                'description' => $courseSubject->curriculum_subject->description,
                'course_code' => $courseSubject->curriculum_subject->course_code,
                'lecture' => $courseSubject->curriculum_subject->lec,
                'laboratory' => $courseSubject->curriculum_subject->lab,
                'units' => $courseSubject->curriculum_subject->units,
                'pre-requisite(s)' => $descriptions->filter()
            ];
        });

        return response()->json($getCourseSubjects);
    }
}
