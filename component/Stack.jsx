import React from 'react'
import {
    Button, Text
} from 'react-native';

;
import Home from '../screens/Home';
import About from '../screens/About';
import Example from '../screens/Example';
import { ScreenStackHeaderSearchBarView } from 'react-native-screens';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Contact from '../screens/Contact';

const Stack = createNativeStackNavigator();


const StackNavigation = () => {
    return (
        

            <Stack.Navigator>
                <Stack.Screen name="Home" component={Home} />
                <Stack.Screen name="About" component={About} />
            </Stack.Navigator>

        

    )
}

const MainNavigation = () => {
    <Stack.Navigator>
        <Stack.Screen name="Contact" component={Contact} />
    </Stack.Navigator>
}


export { StackNavigation, MainNavigation };
