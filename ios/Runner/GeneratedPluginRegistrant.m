//
//  Generated file. Do not edit.
//

// clang-format off

#import "GeneratedPluginRegistrant.h"

#if __has_include(<device_info/FLTDeviceInfoPlugin.h>)
#import <device_info/FLTDeviceInfoPlugin.h>
#else
@import device_info;
#endif

#if __has_include(<flutter_secure_storage/FlutterSecureStoragePlugin.h>)
#import <flutter_secure_storage/FlutterSecureStoragePlugin.h>
#else
@import flutter_secure_storage;
#endif

#if __has_include(<platform_device_id/PlatformDeviceIdPlugin.h>)
#import <platform_device_id/PlatformDeviceIdPlugin.h>
#else
@import platform_device_id;
#endif

@implementation GeneratedPluginRegistrant

+ (void)registerWithRegistry:(NSObject<FlutterPluginRegistry>*)registry {
  [FLTDeviceInfoPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTDeviceInfoPlugin"]];
  [FlutterSecureStoragePlugin registerWithRegistrar:[registry registrarForPlugin:@"FlutterSecureStoragePlugin"]];
  [PlatformDeviceIdPlugin registerWithRegistrar:[registry registrarForPlugin:@"PlatformDeviceIdPlugin"]];
}

@end
