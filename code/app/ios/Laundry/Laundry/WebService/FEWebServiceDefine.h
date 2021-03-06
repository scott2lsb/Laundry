//
//  FEWebServiceDefine.h
//  Laundry
//
//  Created by Seven on 15-1-14.
//  Copyright (c) 2015年 FUEGO. All rights reserved.
//

#ifndef Laundry_FEWebServiceDefine_h
#define Laundry_FEWebServiceDefine_h


//system manager
#define __METHOD_GetCompany          @"index.php/CompanyManage/Show"
#define __METHOD_GetClientVersion    @"index.php/ClientVersionManage/GetLatestVersion"


//user manager
#define __METHOD_Login              @"index.php/Index/Login"
#define __METHOD_Logout             @"index.php/Index/Logout"
#define __METHOD_ModifyPassword     @"index.php/Index/ModifyPassword"
#define __METHOD_Register           @"index.php/Index/Register"
#define __METHOD_SendVerifyCode     @"index.php/UserManage/SendVerifyCode"
#define __METHOD_ResetPsw           @"index.php/Index/ResetPassword"
#define __METHOD_ModifyProfile      @"laundry.php/CustomerManage/Modify"
#define __METHOD_GetCustomer        @"laundry.php/CustomerManage/Show"
#define __METHOD_Update             @"index.php/ClientVersionManage/GetLatestVersion"

//AD manager
#define __METHOD_GetAD             @"laundry.php/ADManage/LoadAll"


//Order manage
#define __METHOD_OrderList              @"laundry.php/OrderManage/LoadPage"
#define __METHOD_OrderCreate              @"laundry.php/OrderManage/Create"
#define __METHOD_OrderModify         @"laundry.php/OrderManage/Modify"
#define __METHOD_OrderDetail         @"laundry.php/OrderManage/LoadOrderDetailPage"
#define __METHOD_OrederCancel         @"laundry.php/OrderManage/CancelOrder"
#define __METHOD_OrderDelete         @"laundry.php/OrderManage/AbolishOrder"

//product manage
#define __METHOD_ProductGetList     @"laundry.php/ProductManage/LoadPage"
#define __METHOD_ProductType         @"laundry.php/ProductManage/GetProdutType_rest"


#endif
