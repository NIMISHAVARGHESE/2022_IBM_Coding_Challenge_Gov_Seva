# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"

from typing import Any, Text, Dict, List
from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
#
#
class ActionHelloWorld(Action):
#
     def name(self) -> Text:
         return "action_hello_world"

     def run(self, dispatcher: CollectingDispatcher,
             tracker: Tracker,
             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
         n=tracker.get_intent_of_latest_message()
         if n=="option 1":
             dispatcher.utter_message("Your response would be redirected to : gazette office Collectorate Kottayam ,kerala 686002 ,[click here](http://localhost/govseva/namechange.php)")
         elif n=="option 2":
             dispatcher.utter_message("Your response would be redirected to : Sub Registrar office Ettumanoor, Kottayam kerala 686635 ,[click here](http://localhost/govseva/landchange.php)")

         return []
