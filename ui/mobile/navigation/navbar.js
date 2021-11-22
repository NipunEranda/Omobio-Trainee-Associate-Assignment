import {createAppContainer,createSwitchNavigator} from "react-navigation"

import SplashScreen from "../screen/SplashScreen";
import SignInScreen from "../screen/SignInScreen";

const defaultNavOptions={
    headerStyle:{
        backgroundColor:"#C1C1C1"
    },
    headerTintColor:"#4D0000",
    headerTitleStyle:{
        fontSize:22,
        fontFamily:"sans-serif"
    },
};

const Screens=createSwitchNavigator({
    SplashScreen,
    SignInScreen,
},{
    defaultNavigationOptions:defaultNavOptions
});

export default createAppContainer(Screens)
