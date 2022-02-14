<?php

namespace App\Http\Controllers;

use Dong\HttpCodes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MarcinOrlowski\ResponseBuilder\Exceptions\ArrayWithMixedKeysException;
use MarcinOrlowski\ResponseBuilder\Exceptions\ConfigurationNotFoundException;
use MarcinOrlowski\ResponseBuilder\Exceptions\IncompatibleTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\InvalidTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\MissingConfigurationKeyException;
use MarcinOrlowski\ResponseBuilder\Exceptions\NotIntegerException;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 2021/12/30--3:15 PM
     * @email:2453611300
     * @wechat:DZA74941
     * @QQ:2453611300
     * @web:www.quzha.net
     * @effect:公共返回
     * @param $data
     * @param string $msg
     * @param int $ApiCode
     * @param int $httpCode
     * @return Response
     * @throws InvalidTypeException
     * @throws ArrayWithMixedKeysException
     * @throws ConfigurationNotFoundException
     * @throws IncompatibleTypeException
     * @throws MissingConfigurationKeyException
     * @throws NotIntegerException
     */
    public function success($data, string $msg = '', int $ApiCode = HttpCodes::HTTP_OK, int $httpCode = HttpCodes::HTTP_OK): Response
    {
        return ResponseBuilder::asSuccess($ApiCode)
            ->withHttpCode($httpCode)
            ->withData($data)
            ->withMessage($msg ?? __('message.common.search.success'))
            ->build();
    }

    /**
     * 2021/12/30--3:15 PM
     * @email:2453611300
     * @wechat:DZA74941
     * @QQ:2453611300
     * @web:www.quzha.net
     * @effect:公共返回
     * @param string $msg
     * @param int $ApiCode
     * @param int $httpCode
     * @return Response
     * @throws ArrayWithMixedKeysException
     * @throws ConfigurationNotFoundException
     * @throws IncompatibleTypeException
     * @throws InvalidTypeException
     * @throws MissingConfigurationKeyException
     * @throws NotIntegerException
     */
    public function error(string $msg = '', int $ApiCode = HttpCodes::HTTP_BAD_REQUEST, int $httpCode = HttpCodes::HTTP_BAD_REQUEST): Response
    {
        return ResponseBuilder::asError($ApiCode)
            ->withHttpCode($httpCode)
            ->withMessage($msg ?? __('message.common.search.fail'))
            ->build();
    }
}
