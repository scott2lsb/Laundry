//
//  FEOrderDetailRequest.h
//  Laundry
//
//  Created by Seven on 15-1-19.
//  Copyright (c) 2015年 FUEGO. All rights reserved.
//

#import "FEBaseRequest.h"

@interface FEOrderDetailRequest : FEBaseRequest
@property (nonatomic, strong, readonly) NSNumber *obj;
-(id)initWithOrderID:(NSNumber *)oid;
@end
