<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudfunctions_v2_generated_FunctionService_ListRuntimes_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Functions\V2\Client\FunctionServiceClient;
use Google\Cloud\Functions\V2\ListRuntimesRequest;
use Google\Cloud\Functions\V2\ListRuntimesResponse;

/**
 * Returns a list of runtimes that are supported for the requested project.
 *
 * @param string $formattedParent The project and location from which the runtimes should be
 *                                listed, specified in the format `projects/&#42;/locations/*`
 *                                Please see {@see FunctionServiceClient::locationName()} for help formatting this field.
 */
function list_runtimes_sample(string $formattedParent): void
{
    // Create a client.
    $functionServiceClient = new FunctionServiceClient();

    // Prepare the request message.
    $request = (new ListRuntimesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var ListRuntimesResponse $response */
        $response = $functionServiceClient->listRuntimes($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = FunctionServiceClient::locationName('[PROJECT]', '[LOCATION]');

    list_runtimes_sample($formattedParent);
}
// [END cloudfunctions_v2_generated_FunctionService_ListRuntimes_sync]
