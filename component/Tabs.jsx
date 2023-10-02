import React from 'react'
import {
    Button, Text
} from 'react-native';

import Home from '../screens/Home';
import About from '../screens/About';
import Example from '../screens/Example';
import  Contact from '../screens/Contact'
import {StackNavigation,MainNavigation} from './Stack'
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

const Tab = createBottomTabNavigator();



const TabsNavigation = () => {
    return (
        

            <Tab.Navigator initialRouteName="Home">
                <Tab.Screen name="Home" component={Home} />
                <Tab.Screen name="About" component={About} />
                <Tab.Screen name="Example" component={Example} />
                
            </Tab.Navigator>

        

    )
}
const TabsContact = () => {
    return (
        

            <Tab.Navigator initialRouteName="Contact">
                <Tab.Screen name="Home" component={Home} />
                <Tab.Screen name="About" component={About} />
                <Tab.Screen name="Example" component={Example} />
                
            </Tab.Navigator>

        

    )
}



export  {TabsNavigation,TabsContact}
